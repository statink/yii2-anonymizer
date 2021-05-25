<?php
/**
 * @copyright Copyright (C) 2015-2021 AIZAWA Hina
 * @license https://github.com/fetus-hina/stat.ink/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@bouhime.com>
 */

declare(strict_types=1);

namespace statink\yii2\anonymizer;

use statink\yii2\sillyname\SillynameAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class AnonymizerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/statink/yii2-anonymizer/assets';
    public $css = [
        'anonymizer.min.css',
    ];
    public $js = [
        'anonymizer.min.js',
    ];
    public $depends = [
        JqueryAsset::class,
        SillynameAsset::class,
    ];
}
