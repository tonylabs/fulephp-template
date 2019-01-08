<?php

class Asset extends Fuel\Core\Asset
{
    private static $server = 'https://cdn.tonylabs.com/assets';

    public static function cdn($file, $attributes = array())
    {
        $arrayFile = explode('.', $file);
        $type = end($arrayFile);

        $attribute = '';
        if (!empty($attributes) && is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attribute .= $key.'="'.$val.'"';
            }
        }

        switch ($type) {
            case 'js':
                return '<script type="text/javascript" src="'.self::$server.DS.$file.'"></script>';
                break;
            case 'css':
                return '<link type="text/css" rel="stylesheet" href="'.self::$server.DS.$file.'" />';
                break;
            case 'webm':
                return '<source src="'.self::$server.DS.$file.'" type="video/webm" '.$attribute.'>';
                break;
            case 'mp4':
                return '<source src="'.self::$server.DS.$file.'" type="video/mp4" '.$attribute.'>';
                break;
            case 'jpg':
            case 'png':
            case 'svg':
            case 'gif':
                return '<img src="'.self::$server.DS.$file.'" '.$attribute.' />';
                break;
            default:
                return false;
        }
    }
}