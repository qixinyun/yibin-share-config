<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/yibin-share-config/src/SmartyConfig/Yb',
            S_ROOT.'vendor/qixinyun/yibin-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/yibin-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
