<?php
/**
 * Jorgeuos - MIT License
 *
 * @link https://jorgeuos.github.io/
 * @license https://github.com/jorgeuos/matomo-simple-vue/blob/main/LICENSE
 */
namespace Piwik\Plugins\SimpleVue;

use Piwik\Piwik;
use Piwik\View;
use Piwik\Menu\MenuAdmin;
use Piwik\Menu\MenuTop;

class Controller extends \Piwik\Plugin\Controller
{
    /**
     * Just a basic view in admin section
     * Goto: https://localhost:8443/index.php?module=SimpleVue&action=index&idSite=1&period=day&date=today
     */
    public function index()
    {
        Piwik::checkUserHasSomeAdminAccess();
        return $this->renderTemplate('index', array(
            'topMenu' => MenuTop::getInstance()->getMenu(),
            'adminMenu' => MenuAdmin::getInstance()->getMenu(),
            'answerToLife' => 42
        ));
    }
}
