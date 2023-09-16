<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthInstagram extends Model
{
    /**
     * @var string
     */
    protected $table = 'auth_instagram';

    /**
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'token',
    ];
}
