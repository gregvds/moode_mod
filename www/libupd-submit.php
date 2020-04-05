#!/usr/bin/php
<?php
/**
 * moOde audio player (C) 2014 Tim Curtis
 * http://moodeaudio.org
 *
 * This Program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3, or (at your option)
 * any later version.
 *
 * This Program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * 2020-MM-DD TC moOde 6.5.0
 *
 */

set_include_path('/var/www/inc');
require_once 'playerlib.php';

$option = isset($argv[1]) ? $argv[1] : '';

switch ($option) {
	case '--help':
	echo
"Usage: Library update\n";
		break;
	default:
		break;
}

session_id(playerSession('getsessionid'));
session_start();
submitJob('update_library', '', '', '');
session_write_close();
