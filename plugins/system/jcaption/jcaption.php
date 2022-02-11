<?php

defined('JPATH_PLATFORM') or die;

class PlgSystemJCaption extends JPlugin
{
    public function onAfterDispatch()
    {
        $app = JFactory::getApplication();

        // only in "site"
        if ($app->getClientId() !== 0) {
            return;
        }

        $document = JFactory::getDocument();
        $docType = $document->getType();

        // only in html pages
        if ($docType != 'html') {
            return;
        }

        // Include jQuery
        JHtml::_('jquery.framework');

        $document->addScript(JURI::base(true) . '/plugins/system/jcaption/js/jcaption.js', array('version'));
    }
}
