# yii2-bootbox-widget
```
https://github.com/makeusabrew/bootbox
```
composer.json
---------
```json
"require": {
    "xj/yii2-bootbox-widget": "*"
},
```

In View
---------
```php
use xj\bootbox\BootboxAsset;
BootboxAsset::register($this);

//register with replace Yii.confirm
BootboxOverrideAsset::register($this);
//OR
BootboxAsset::registerWithOverride($this);
```
