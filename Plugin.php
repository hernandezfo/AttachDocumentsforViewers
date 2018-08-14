<?php
/**
 *
 * @package  Kanboard\plugins\AttachDocumentsforViewers
 * @author   Franklin Hernandez
 */
namespace Kanboard\Plugin\AttachDocumentsforViewers;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;
use Kanboard\Core\Security\Role;

class Plugin extends Base
{
  public function initialize()
  {
    $this->projectAccessMap->add('TaskFileController', array('create', 'save', 'confirm', 'remove'), Role::PROJECT_VIEWER);
    $this->template->hook->attach('template:task:sidebar:information', 'AttachDocumentsforViewers:task/sidebar');

  }

  public function getPluginName()
  {
    return 'Attach Documents for Project Viewers';
  }
  
  public function getPluginAuthor()
  {
    return 'Franklin Hernandez';
  }

  public function getPluginVersion()
  {
    return '0.0.1';
  }
  
  public function getPluginDescription()
  {
    return 'Allow Project Viewers to attach documents';
  }

  public function getPluginHomepage()
  {
    return 'https://github.com/hernandezfo/AttachDocumentsforViewers';
  }
}
