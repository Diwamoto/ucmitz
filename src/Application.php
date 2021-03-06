<?php
declare(strict_types=1);

/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) baserCMS User Community <https://basercms.net/community/>
 *
 * @copyright     Copyright (c) baserCMS User Community
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       http://basercms.net/license/index.html MIT License
 */
namespace App;

use BaserCore\BcApplication;

/**
 * Class Application
 *
 * BcApplication を継承することで、 baserCMS に関連するプラグインを bootstrap() メソッドで自動的にロードする
 *
 * @package App
 */
class Application extends BcApplication
{
}
