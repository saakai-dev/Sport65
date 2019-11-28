<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RegistrationFormRequest;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;
use Arr;
class AuthController extends Controller
{
    /**
     * @var bool
     */
    public $loginAfterSignUp = true;

     /**
     * @var
     */
    // protected $user;

    /**
     * TaskController constructor.
     */
    // public function __construct()
    // {
    //     $this->user = JWTAuth::parseToken()->authenticate();
    // }


    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request)
    {
        $input = $request->only('phone', 'password');
        $token = null;

        if (!$token = JWTAuth::attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Phone or Password',
            ], 401);
        }

        return response()->json([
            'success' => true,
            'token' => $token,
            'user' => auth()->user(),
        ]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function logout(Request $request)
    {
        $this->validate($request, [
            'token' => 'required'
        ]);

        try {
            JWTAuth::invalidate($request->token);

            return response()->json([
                'success' => true,
                'message' => 'User logged out successfully'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, the user cannot be logged out'
            ], 500);
        }
    }

    /**
     * @param RegistrationFormRequest $request
     * @return JsonResponse
     */
    public function register(Request $request)
    {
        $userReg = new User();
        $userReg->fill($request->all());
        // $user->state_id = 1;
        // $user->locality_id =1;
        // $user->role_id = 1;
        // $user->national_id = 1;
//        $user->state_id = $request->state_id;
//        $user->locality_id = $request->locality_id;
//        $user->role_id = $request->role_id;
//        $user->national_id = $request->national_id;
        $userReg->password = bcrypt($request->password);
        $userReg->save();

        if ($this->loginAfterSignUp) {
            return $this->login($request);
        }

        return response()->json([
            'success' => true,
            'data' => $userReg
        ], 200);
    }

    public function sendResetPasswordCode()
    {
        $user = JWTAuth::parseToken()->authenticate();
         $userID = $user->id;

        $users = User::where('id', $userID)->update(['sms_code'=> str::random(2,9)]);
        return $users;

    }

    public function passwordReset(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $userID = $user->id;
        $smsCode = $request->sms_code;
        $smsCodeVirvie = DB::select('select sms_code from users where id = ?', [$userID]);
        if ($smsCode == $smsCodeVirvie){
        $users = User::where('id', $userID)->update(['password'=> bcrypt($request->password)]);
        return ['user'=> $users, 'smsCode'=> $smsCodeVirvie];
        }

    }
}
