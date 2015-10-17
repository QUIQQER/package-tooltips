<?php

/**
 * This file contains \QUI\Tooltips\Events
 */
namespace QUI\Tooltips;

/**
 * Event handling
 *
 * @author www.pcsg.de (Henning Leutz)
 */
class Events
{
    static function onTemplateGetHeader($Template)
    {
        $Template->extendHeaderWithCSSFile(URL_OPT_DIR .'quiqqer/tooltips/bin/html5tooltips.css');
        $Template->extendHeaderWithCSSFile(URL_OPT_DIR .'quiqqer/tooltips/bin/html5tooltips.animation.css');

        $Template->extendHeader(
            '<script type="text/javascript">
            /* <![CDATA[ */
                require.config({
                    paths : {
                        html5tooltips : URL_OPT_DIR +"quiqqer/tooltips/bin/html5tooltips"
                    }
                });

                require([\'html5tooltips\'], function(html5tooltips) {
                    html5tooltips.autoinit();

                    document.getElements("[data-tooltip]").set("title", "");

                    window.html5tooltips = html5tooltips;
                });
            /* ]]> */
            </script>'
        );
    }
}