<?php
/**
 * @package     mod_dd-slider
 * @author      Thomas Winterling
 * @email       info@winterling-labs.com
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JLoader::register('ModDD_SliderHelper', __DIR__ . '/helper.php');


// Check for a custom CSS file
JHtml::_('stylesheet', 'mod_dd_slider/user.css', array('version' => 'auto', 'relative' => true));

require_once JModuleHelper::getLayoutPath('mod_dd_slider', $params->get('layout', 'default'));