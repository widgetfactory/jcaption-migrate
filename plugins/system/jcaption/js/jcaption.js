/**
 * @package   	JCE
 * @copyright 	Copyright (c) 2009-2022 Ryan Demmer. All rights reserved.
 * @copyright   (C) 2010 Open Source Matters, Inc. <https://www.joomla.org>
 * @license   	GNU/GPL 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * JCE is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

/* global jQuery */

/* based on media/system/js/caption.js */

(function ($) {

    $(document).ready(function () {
        $('img.caption').each(function () {
            var $el = $(this),
                caption = $el.attr('title'),
                align = $el.attr("align") || $el.css("float") || this.style.styleFloat || "none",

                $p = $('<figcaption/>', {
                    "text": caption,
                    "class": 'caption'
                }),

                $container = $('<figure/>', {
                    "class": 'item-image' + " " + align
                });

            $el.before($container);

            $container.append($el);

            if (caption !== "") {
                $container.append($p);
            }
        });
    });

})(jQuery);
