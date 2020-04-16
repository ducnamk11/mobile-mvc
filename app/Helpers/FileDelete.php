<?php

namespace App\Helpers;

class Template
{
    public static function UnlinkImage($filepath, $fileName)
    {
        $old_image = $filepath . $fileName;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
    }
}
