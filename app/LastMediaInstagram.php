<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LastMediaInstagram extends Model
{
    /**
     * @var string
     */
    protected $table = 'last_media_instagram';

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
        'media_url',
        'caption',
        'media_type'
    ];
}
