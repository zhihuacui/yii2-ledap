<?php

namespace ethercap\ledap\assets;

use yii\web\AssetBundle;

class VueAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue/dist';
    public $js = [
        YII_DEBUG ? 'vue.js' : 'vue.min.js',
    ];
}
