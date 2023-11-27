<?php

defined('JPATH_PLATFORM') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;

class PlgSystemJCaption extends CMSPlugin
{
    public function onAfterDispatch()
    {
        $app = Factory::getApplication();

        // only in "site"
        if ($app->getClientId() !== 0) {
            return;
        }

        $document = Factory::getDocument();
        $docType = $document->getType();

        // only in html pages
        if ($docType != 'html') {
            return;
        }

        // Include jQuery
        HTMLHelper::_('jquery.framework');

        $document->addScript(Uri::base(true) . '/plugins/system/jcaption/js/jcaption.js', array('version'));
    }
}
