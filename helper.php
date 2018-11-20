<?php
/**
 * @package     mod_dd-slider
 * @author      Thomas Winterling
 * @email       info@winterling-labs.com
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_dd-slider
 *
 * @since  Version 1.0.0.0
 */
class modDD_SliderHelper
{

    public static function getSliderHTML ($params)
    {


        jimport( 'joomla.application.module.helper' );
        $module = JModuleHelper::getModule('dd_slider');

        $module_id = $module->id;

        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select('params')
            ->from($db->quoteName('#__modules'))
            ->where('id = ' . $db->quote($module_id));
        $db->setQuery($query);

        $moduleparams = (json_decode($db->loadResult()));

        $html = '<div id="dd_article_slides">';

        $i = 0;

        foreach ($moduleparams->params as $slide)
        {

            $i++;
            $html .= '<div id="dd_article_slides_fields' . $i . '" class="article_slide">';
            $html .=    '<div class="article_slide_inner">';
            $html .=        '<img src="' . $slide->image . '" alt="'. $slide->image_alt .'">';
            $html .=        '<div class="article_slide_info">';
            $html .=            '<p>' . $slide->image_desc .'</p>';
            $html .=            '<small>Bild: '. $slide->image_source . '</small>';
            $html .=        '</div>';
            $html .=        '<button class="article_slide_info_toggle">';
            $html .=            '<span class="icon-dd-arrow-up"></span>';
            $html .=            '<span class="icon-dd-arrow-down"></span>';
            $html .=        '</button>';
            $html .=    '</div>';
            $html .= '</div>';
        }

        $html .= '<div class="article_slides_controls">';
        $html .=     '<span class="icon-dd-arrow-left" id="slide-left"></span>';
        $html .=     '<span id="article_slide_active">1</span> / <span>'. count( (array) $moduleparams->params) .'</span>';
        $html .=     '<span class="icon-dd-arrow-right" id="slide-right"></span>';
        $html .= '</div>';


        return $html;
    }

}
