<?php

/**
 * 
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\bootbox;

use \Yii;
use yii\web\AssetBundle;

class BootboxAsset extends AssetBundle {

    public $sourcePath = '@bower/bootbox';
    public $basePath = '@webroot/assets';
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
        $assetbundle = self::register($view);
        Yii::$app->view->registerJs('
            yii.confirm = function(message, ok, cancel) {
                bootbox.confirm(message, function(result) {
                    if (result) { !ok || ok(); } else { !cancel || cancel(); }
                });
            }
        ');

        if(Yii::$app->language !== null && strlen(Yii::$app->language)>=2) {
            Yii::$app->view->registerJs('bootbox.setDefaults({locale: "'.substr(Yii::$app->language,0,2).'"});');
        }
        
        return $assetbundle;
    }

}
