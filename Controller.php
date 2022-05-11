<?php
/**
 * Jorgeuos - MIT License
 *
 * @link https://jorgeuos.github.io/
 * @license https://github.com/jorgeuos/matomo-simple-vue/blob/main/LICENSE
 */

namespace Piwik\Plugins\SimpleVue;

use Piwik\View;

class Controller extends \Piwik\Plugin\Controller
{
    /**
     * Just a basic view in admin section
     * Goto: https://localhost:8443/index.php?module=SimpleVue&action=index&idSite=1&period=day&date=today
     */
    public function index()
    {
        return $this->renderTemplate('index', array(
            'answerToLife' => 42
        ));
    }
}
