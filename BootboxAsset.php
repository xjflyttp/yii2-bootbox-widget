<?php

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\bootbox;

use \Yii;
use yii\web\AssetBundle;

class BootboxAsset extends AssetBundle
{

    public $sourcePath = '@bower/bootbox';
    public $js = ['bootbox.js'];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset'
    ];

    /**
     * Registers this asset bundle with a view.
     * @param \yii\web\View $view the view to be registered with
     * @return static the registered asset bundle instance
     */
    public static function registerWithOverride($view)
    {
        return BootboxOverrideAsset::register($view);
    }

}
