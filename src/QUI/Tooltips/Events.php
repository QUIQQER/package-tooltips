<?php

/**
 * This file contains \QUI\Tooltips\Events
 */

namespace QUI\Tooltips;

use QUI\Template;

/**
 * Event handling
 *
 * @author www.pcsg.de (Henning Leutz)
 */
class Events
{
    /**
     * @param Template $Template
     */
    public static function onTemplateGetHeader($Template)
    {
        $Template->extendHeaderWithCSSFile(URL_OPT_DIR.'bin/quiqqer-asset/html5tooltipsjs/html5tooltipsjs/html5tooltips.css');
        $Template->extendHeaderWithCSSFile(URL_OPT_DIR.'bin/quiqqer-asset/html5tooltipsjs/html5tooltipsjs/html5tooltips.animation.css');
    }
}
