<?php

/**
 * @link http://www.shenl.com/
 * @copyright Copyright (c) 2012 - 2015 SHENL.COM
 * @license http://www.shenl.com/license/
 */

namespace hustshenl\metronic\bundles;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle {

    /**
     * @var string source assets path
     */
    public $sourcePath = '@hustshenl/metronic/assets';

    /**
     * @var array depended packages
     */
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'kartik\icons\FontAwesomeAsset',
        'yii\web\YiiAsset',
        'hustshenl\metronic\bundles\FontAsset',
    ];

    /**
     * @var array css assets
     */
    public $css = [

    ];

    /**
     * @var array js assets
     */
    public $js = [
        //'global/plugins/jquery-migrate-1.2.1.min.js',
        //'global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js',
        /*'global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'global/plugins/jquery.blockui.min.js',
        'global/plugins/jquery.cokie.min.js',
        'global/plugins/uniform/jquery.uniform.min.js',
        'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',*/
        'global/scripts/app.js',
        'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    ];

    /**
     * @var array js options
     */
    public $jsOptions = [
        'conditions' => [
            'plugins/respond.min.js' => 'if lt IE 9',
            'plugins/excanvas.min.js' => 'if lt IE 9',
        ],
    ];
}
