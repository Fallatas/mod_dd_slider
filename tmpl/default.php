<?php
/**
 * @package     mod_dd-slider
 * @author      Thomas Winterling
 * @email       info@winterling-labs.com
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('stylesheet', 'mod_dd_slider/style.css', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'mod_dd_slider/article_slides.js', array('version' => 'auto', 'relative' => true));

?>

<?php echo $sliderfunction; ?>
