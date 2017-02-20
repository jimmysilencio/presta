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

class BonjourLesFilles extends Module
{
    public function __construct()
    {
        $this->name         = 'bonjourlesfilles';
        $this->tab          = 'front_office_features';
        $this->version      = '1.1.0';
        $this->author       = 'silencio';
        $this->bootstrap    = true;

        parent::__construct();

        $this->displayName  = $this->l('Bonjour les filles');
        $this->description  = $this->l('Prestashop formation pour prévoir le licencement de Loic');

        if (!Configuration::get('BONJOUR_LES_FILLES_NAME')) {
            $this->warning = $this->l('No name provided');
        }
    }

    public function getContent()
    {
        $output = '';
        if (Tools::isSubmit('submit' . $this->name)) {
            $bonjour_les_filles_name = Tools::getValue('BONJOUR_LES_FILLES_NAME');
            if (!$bonjour_les_filles_name || !Validate::isGenericName($bonjour_les_filles_name)) {
                $output .= $this->displayError($this->l('Invalid Configuration value'));
            } else {
                Configuration::updateValue('BONJOUR_LES_FILLES_NAME', $bonjour_les_filles_name);
                $output .= $this->displayConfirmation($this->l('Settings updates'));
            }
        }

        return $output . $this->displayForm();
    }

    public function displayForm()
    {
        // Get default Language
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        // Init Fields from array
        $fields_form = array();
        $fields_form[0]['form'] = array(
                'legend' => array(
                    'title' => $this->l('Hello settings'),
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('Configuration value'),
                        'name' => 'BONJOUR_LES_FILLES_NAME',
                        'size' => 20,
                        'required' => true,
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Displayed'),
                        'name' => 'active',
                        'required' => false,
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            );

        $helper = new HelperForm();

        // Module, Token and currentIndex
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;

        // Language
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;

        // Title and toolbar
        $helper->title = $this->displayName;
        $helper->show_toolbar = true; // false -> remove toolbar
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'submit' . $this->name;

        // Load current value
        $helper->fields_value['BONJOUR_LES_FILLES_NAME'] = Configuration::get('BONJOUR_LES_FILLES_NAME');
        $helper->fields_value['active'] = false;

        return $helper->generateForm($fields_form);
    }

    public function install()
    {
        if (!parent::install()
            || !$this->registerHook('displayLeftColumn')
            || !$this->registerHook('displayHeader')
            || !Configuration::updateValue('BONJOUR_LES_FILLES_NAME', 'Suzanne')) {
            return false;
        }
        return true;
    }

    public function uninstall()
    {
        return parent::uninstall() && Configuration::deleteByName('BONJOUR_LES_FILLES_NAME');
    }

    public function hookDisplayLeftColumn()
    {
        // views/templates/hook/bonjourlesfilles.tpl
        $this->context->smarty->assign('name', Configuration::get('BONJOUR_LES_FILLES_NAME'));
        return $this->display(__FILE__, 'bonjourlesfilles.tpl');
    }

    public function hookDisplayHeader()
    {
        $this->context->controller->addCSS($this->_path . '/views/css/bonjourlesfilles.css', 'all');
    }
}
