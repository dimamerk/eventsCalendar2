<?php
/**
 * eventsCalendar2
 *
 * Copyright 2010 by Shaun McCormick <shaun+eventscalendar2@modx.com>
 *
 * eventsCalendar2 is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * eventsCalendar2 is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * eventsCalendar2; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package eventscalendar2
 */
/**
 * Adds modActions and modMenus into package
 *
 * @package eventscalendar2
 * @subpackage build
 */
/*
$action= $modx->newObject('modAction');
$action->fromArray(array(
    'id' => 1,
    'namespace' => 'eventscalendar2',
    'parent' => 0,
    'controller' => 'index',
    'haslayout' => 1,
    'lang_topics' => 'eventscalendar2:default',
    'assets' => '',
),'',true,true);
*/
/* load action into menu */
/*
$menu= $modx->newObject('modMenu');
$menu->fromArray(array(
    'text' => 'eventscalendar2',
    'parent' => 'components',
    'description' => 'eventscalendar2.menu_desc',
    'icon' => 'images/icons/plugin.gif',
    'menuindex' => 0,
    'params' => '',
    'handler' => '',
),'',true,true);
$menu->addOne($action);
unset($action);

return $menu;
*/
return '';