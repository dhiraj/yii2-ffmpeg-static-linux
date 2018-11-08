<?php
/**
 * Created by PhpStorm.
 * User: dhiraj
 * Date: 8/16/17
 * Time: 7:45 PM
 */

namespace traversient\yii;


use yii\base\Component;
use yii\base\InvalidConfigException;

class FFMPEGStatic extends Component
{
    static function basePath(){
        return __DIR__.DIRECTORY_SEPARATOR."bin".DIRECTORY_SEPARATOR."linux";
    }
    public static function FFMPEGPath(){
        return self::basePath().DIRECTORY_SEPARATOR."ffmpeg";
    }
    public static function FFPROBEPath(){
        return self::basePath().DIRECTORY_SEPARATOR."ffprobe";
    }

}
