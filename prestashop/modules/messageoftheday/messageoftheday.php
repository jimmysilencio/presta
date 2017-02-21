<?php
/**
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2017 PrestaShop SA
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class MessageOfTheDay extends Module
{
    public function __construct()
    {
        $this->name         = 'messageoftheday';
        $this->tab          = 'front_office_features';
        $this->version      = '1.1.0';
        $this->author       = 'Quanguy Konkak';
        $this->bootstrap    = true;

        parent::__construct();

        $this->displayName = $this->l('Module Message of the day');
        $this->description = $this->l('Module pour mettre le message de la journée');
    }


    public function install()
    {
        self::installInBO();

        return (parent::install()
            && $this->registerHook('displayHome')
            && Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'messageofday` (
                `id_messageofday` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                `active` TINYINT(1) NOT NULL DEFAULT \'0\',
                `date_published_on` DATE,
                `date_published_off` DATE,
                `date_add` DATETIME,
                `date_upd` DATETIME,
                PRIMARY KEY (`id_messageofday`)
            ) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8')
        && Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'messageofday_lang` (
                `id_messageofday` INT(10) UNSIGNED NOT NULL,
                `id_lang` INT(10) UNSIGNED NOT NULL,
                `title` VARCHAR(120) DEFAULT NULL,
                `message` TEXT,
                PRIMARY KEY (`id_messageofday`, `id_lang`)
            ) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8'));
        
    }

    public function uninstall()
    {
        self::removeFromBO();

        return (parent::uninstall()
            && Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'messageofday`')
            && Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'messageofday_lang`'));
    }

    public function hookDisplayHome()
    {
        include_once dirname(__FILE__).'/classes/messageofday.php';
        
        $message = MessageOfDay::getMessage();
        
        $this->context->smarty->assign('message', $message);
        return $this->display(__FILE__, 'messagehomelink.tpl');
    }

    public function hookDisplayHeader()
    {
        return $this->display(__FILE__, 'messagelist.tpl');
    }

    public static function installInBO()
    {
        $new_menu = new Tab();
        $new_menu->id_parent = Tab::getIdFromClassName('AdminParentCustomer');
        $new_menu->class_name = 'AdminMessageOfTheDay';
        $new_menu->module = 'messageoftheday';
        $new_menu->active = 1;

        $languages = Language::getLanguages(true);
        foreach ($languages as $language) {
            $new_menu->name[(int)$language['id_lang']] = 'Manage day message';
        }
        return $new_menu->save();
    }

    public static function removeFromBO()
    {
        $remove_id = Tab::getIdFromClassName('AdminMessageOfTheDay');
        if ($remove_id) {
            $to_remove = new Tab((int)$remove_id);
            if (Validate::isLoadedObject($to_remove)) {
                return $to_remove->delete();
            }
        }
        return false;
    }
}
