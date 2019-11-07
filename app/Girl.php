<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Girl extends Model
{
    protected $table = 'models';

    protected $fillable = [
        'name', 'date_of_birth', 'height', 'national', 'description', 'job', 'image'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
