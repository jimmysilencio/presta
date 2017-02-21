<?php
/**
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2015 PrestaShop SA
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class MessageOfDay extends ObjectModel
{
    public $active;
    public $date_published_on;
    public $date_published_off;
    public $date_add;
    public $date_upd;

    // LANG
    public $title;
    public $message;

    public static $definition = array(
            'table'     => 'messageofday',
            'primary'   => 'id_messageofday',
            'multilang' => true,
            'fields'    => array(
                'active'                => array('type' => self::TYPE_INT),
                'date_published_on'     => array('type' => self::TYPE_DATE),
                'date_published_off'    => array('type' => self::TYPE_DATE),
                'date_add'              => array('type' => self::TYPE_DATE),
                'date_upd'              => array('type' => self::TYPE_DATE),

                // LANG
                'title'                 => array('type' => self::TYPE_STRING,
                                                 'lang' => true,
                                                 'validate' => 'isGenericName',
                                                 'required' => true,
                                                 'size' => 120),
                'message'               => array('type' => self::TYPE_STRING,
                                                 'lang' => true),
            ),
        );

    public static function getMessage($active = true, $sortDescDateUpd = true, $idLang = null)
    {
        $idLang = is_null($idLang) ? (int)Context::getContext()->language->id : (int)$idLang;

        $query = new DbQuery();
        $query->from('messageofday', 'm');
        $query->innerJoin(
            'messageofday_lang',
            'ml',
            'm.id_messageofday = ml.id_messageofday AND ml.id_lang = '.(int)$idLang
        );
        $query->where('m.active = '.(int)$active);
        $query->where('m.date_published_on <= now()');
        $query->where('m.date_published_off > now()');
        $query->orderBy('date_upd '.($sortDescDateUpd ? 'DESC' : 'ASC'));

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($query);
    }

    public static function getMessages($active = true, $sortDescDateUpd = true, $idLang = null)
    {
        $idLang = is_null($idLang) ? (int)Context::getContext()->language->id : (int)$idLang;

        $query = new DbQuery();
        $query->from('messageofday', 'm');
        $query->innerJoin(
            'messageofday_lang',
            'ml',
            'm.id_messageofday = ml.id_messageofday AND ml.id_lang = '.(int)$idLang
        );
        $query->where('m.active = '.(int)$active);
        $query->where('m.date_published_on <= now()');
        $query->where('m.date_published_off > now()');
        $query->orderBy('date_upd '.($sortDescDateUpd ? 'DESC' : 'ASC'));

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);
    }
}
