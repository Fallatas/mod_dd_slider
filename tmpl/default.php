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

<div id="dd_article_slides">

    <?php

    $i = 0;

    foreach ($sliderfunction->params as $slide)
    {
        $i++;
        ?>
        <div id="dd_article_slides_fields<?php echo $i; ?>" class="article_slide">
            <div class="article_slide_inner">
                <img src="<?php echo $slide->image; ?>" alt="<?php echo $slide->image_alt; ?>">
                <div class="article_slide_info">
                    <p><?php echo $slide->image_desc; ?></p>
                    <small>Bild: <?php echo $slide->image_source; ?></small>
                </div>
                <button class="article_slide_info_toggle">
                    <span class="icon-dd-arrow-up"></span>
                    <span class="icon-dd-arrow-down"></span>
                </button>
            </div>
        </div>
        <?php
    }
    ?>

    <div class="article_slides_controls">
        <span class="icon-dd-arrow-left" id="slide-left"></span>
        <span id="article_slide_active">1</span> / <span><?php echo count( (array) $sliderfunction->params); ?></span>
        <span class="icon-dd-arrow-right" id="slide-right"></span>
    </div>

</div>
