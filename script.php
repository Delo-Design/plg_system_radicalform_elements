<?php defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Installer\InstallerAdapter;

class plgSystemRadicalform_elementsInstallerScript
{
    /**
     * Runs right after any installation action.
     *
     * @param   string            $type    Type of PostFlight action. Possible values are:
     * @param   InstallerAdapter  $parent  Parent object calling object.
     *
     * @since  1.1.0
     */

    protected $minimumPHPVersion = '7.0.0';
    protected $minimumJoomlaVersion = '3.9.0';
    protected $minimumYOOthemeVersion = '2.4.0';

    function postflight($type, $parent)
    {
        // Enable plugin
        if ($type === 'install')
        {
            $this->enablePlugin($parent);
        }
    }

    public function preflight($type, $parent)
    {
        // Check the minimum PHP version
        if (!version_compare(PHP_VERSION, $this->minimumPHPVersion, 'ge'))
        {
            $msg = '<p>You need PHP ' . $this->minimumPHPVersion . ' or later to install this plugin.</p>';
            JLog::add($msg, JLog::WARNING, 'jerror');

            return false;
        }

        // Check the minimum Joomla! version
        if (!version_compare(JVERSION, $this->minimumJoomlaVersion, 'ge'))
        {
            $msg = '<p>You need Joomla! ' . $this->minimumJoomlaVersion . ' or later to install this plugin.</p>';
            JLog::add($msg, JLog::WARNING, 'jerror');

            return false;
        }

        // Check the minimum YOOtheme Pro version
        $yoothemeManifest = simplexml_load_file(JPATH_SITE . '/templates/yootheme/templateDetails.xml');
        if (!$yoothemeManifest or !version_compare((string) $yoothemeManifest->version, $this->minimumYOOthemeVersion, 'ge'))
        {
            $msg = '<p>You need YOOtheme Pro ' . $this->minimumYOOthemeVersion . ' or later to install this plugin.</p>';
            JLog::add($msg, JLog::WARNING, 'jerror');

            return false;
        }

        return true;
    }

    /**
     * Enable plugin after installation.
     *
     * @param   InstallerAdapter  $parent  Parent object calling object.
     *
     * @since  1.1.0
     */
    protected function enablePlugin($parent)
    {
        // Prepare plugin object
        $plugin          = new stdClass();
        $plugin->type    = 'plugin';
        $plugin->element = $parent->getElement();
        $plugin->folder  = (string) $parent->getParent()->manifest->attributes()['group'];
        $plugin->enabled = 1;

        // Update record
        Factory::getDbo()->updateObject('#__extensions', $plugin, array('type', 'element', 'folder'));
    }

}