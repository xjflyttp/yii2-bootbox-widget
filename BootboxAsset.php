<?php

/**
 * 
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\bootbox;

use yii\web\AssetBundle;

class BootboxAsset extends AssetBundle {

    public $sourcePath = '@bower/bootbox';
    public $basePath = '@webroot/assets';
    public $js = ['bootbox.js'];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset'
    ];

}
