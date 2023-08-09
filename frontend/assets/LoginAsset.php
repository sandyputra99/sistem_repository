<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // Favicons //
  'tema/assets/img/favicon.png',
  'tema/assets/img/apple-touch-icon.png',

  // Google Fonts -->
  'https://fonts.gstatic.com',
  'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i',

  //Vendor CSS Files -->
  'tema/assets/vendor/bootstrap/css/bootstrap.min.css',
  'tema/assets/vendor/bootstrap-icons/bootstrap-icons.css',
  'tema/assets/vendor/boxicons/css/boxicons.min.css',
  'tema/assets/vendor/quill/quill.snow.css',
  'tema/assets/vendor/quill/quill.bubble.css',
  'tema/assets/vendor/remixicon/remixicon.css',
  'tema/assets/vendor/simple-datatables/style.css',

  //Template Main CSS File -->
  'tema/assets/css/style.css',
        //'css/site.css',
    ];
    public $js = [
        //Vendor JS Files -->
  'tema/assets/vendor/apexcharts/apexcharts.min.js',
  'tema/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
  'tema/assets/vendor/chart.js/chart.umd.js',
  'tema/assets/vendor/echarts/echarts.min.js',
  'tema/assets/vendor/quill/quill.min.js',
  'tema/assets/vendor/simple-datatables/simple-datatables.js',
  'tema/assets/vendor/tinymce/tinymce.min.js',
  'tema/assets/vendor/php-email-form/validate.js',

        //Template Main JS File -->
  'tema/assets/js/main.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
