<?php
/**
 * @package     Bootstrap_Menu
 * @subpackage  mod_bootstrap_menu
 * @copyright   Copyright (C) 2012 AtomTech, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Include the module functions only once.
require_once __DIR__ . '/helper.php';

// Get the module.
$list      = ModBootstrapMenuHelper::getList($params);
$base      = ModBootstrapMenuHelper::getBase($params);
$active    = ModBootstrapMenuHelper::getActive($params);
$active_id = $active->id;
$path      = $base->tree;

// Initialise variables.
$showAll   = $params->get('showAllChildren');
$class_sfx = htmlspecialchars($params->get('class_sfx'));

if (count($list))
{
	require JModuleHelper::getLayoutPath('mod_bootstrap_menu', $params->get('layout', 'default'));
}
