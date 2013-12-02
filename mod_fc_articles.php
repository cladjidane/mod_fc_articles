<?php

/**
 * 
 * @package     Joomla frontend
 * @subpackage  mod_fc_articles
 * @author Fabien CANU <fabien.canu@gmail.com> 
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$list = modFcArticlesHelper::getList($params);
$featured = modFcArticlesHelper::getFeatured($params);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_fc_articles', $params->get('layout', 'horizontal'));
