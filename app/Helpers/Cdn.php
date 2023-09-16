<?php
namespace App\Helpers;

Class Cdn{

    public static  function asset($path, $secure = null){
        return app('url')->assetFrom(env('APP_URL_CDN'), $path, $secure);
    }

}
