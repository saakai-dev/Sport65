<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ligue extends Model
{
    protected $fillable = ['title', 'logo'];
    protected $table = "ligues";


    public function team()
    {
        return $this->hasMany(TopTeam::class);
    }
}
