<?php defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use YOOtheme\Application;

class plgSystemRadicalform_elements extends CMSPlugin
{


    public function onAfterInitialise()
    {
        // Check if YOOtheme Pro is loaded
        if (!class_exists(Application::class, false)) {
            return;
        }

        // Load a single module from the same directory
        $app = Application::getInstance();
        $app->load(__DIR__ . '/bootstrap.php');
    }


}