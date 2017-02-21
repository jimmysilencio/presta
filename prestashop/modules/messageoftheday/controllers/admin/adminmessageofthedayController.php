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

class AdminMessageOfTheDayController extends ModuleAdminController
{
    public function __construct()
    {
        include_once dirname(__FILE__).'/../../classes/messageofday.php';

        $this->table        = 'messageofday';
        $this->className    = 'MessageOfDay';
        $this->lang         = true;
        $this->bootstrap    = true;
        parent::__construct();

        $this->fields_list = array(
                'id_messageofday' => array('title' => '#'),
                'title' => array('title'    => $this->l('Title')),
                'message' => array('title'  => $this->l('Message'), 'orderby'    => false,
                                   'search' => false),
                'date_published_on' => array('title'    => $this->l('Date publihed on'),
                                             'type'     => 'date',
                                             'orderby'  => true,
                                             'search'   => true),
                'date_published_off' => array('title'   => $this->l('Date published off'),
                                              'orderby' => true,
                                              'search'  => true),
                'active' => array('title'  => $this->l('Active'),
                                  'active' => 'status'),
            );

        $this->fields_form = array(
                'legend' => array(
                    'title' => $this->l('Modification'),
                    'icon'  => 'icon-envelope-alt',
                ),
                'input' => array(
                    array(
                        'type'  => 'text',
                        'label' => $this->l('Title'),
                        'name'  => 'title',
                        'size'  => 120,
                        'lang'  => true,
                        'required'  => true,
                    ),
                    array(
                        'type'  => 'text',
                        'label' => $this->l('Message'),
                        'name'  => 'message',
                        'lang'  => true,
                        'required'  => true,
                    ),
                    array(
                        'type'      => 'radio',
                        'label'     => $this->l('Activate'),
                        'name'      => 'active',
                        'required'  => false,
                        'is_bool'   => true,
                        'values'    => array(
                            array('id'      => 'active_on',
                                  'value'   => 1,
                                  'label'   => $this->l('Enabled'),),
                            array('id'      => 'active_off',
                                  'value'   => 0,
                                  'label'   => $this->l('Disabled'),),
                        ),
                    ),
                    array(
                        'type'      => 'date',
                        'label'     => $this->l('Published from'),
                        'name'      => 'date_published_on',
                        'size'      => 10,
                        'required'  => true,
                    ),
                    array(
                        'type'      => 'date',
                        'label'     => $this->l('Published to'),
                        'name'      => 'date_published_off',
                        'size'      => 10,
                        'required'  => true,
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            );

        $this->addRowAction('delete');
        $this->addRowAction('edit');

        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'icon' => 'icon-trash',
                'confirm' => $this->l('Delete selected items?')
            )
        );
    }
}
