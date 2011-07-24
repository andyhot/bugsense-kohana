<?php defined('SYSPATH') or die('No direct script access.');

	Event::add('system.ready', array('BugsenseKohana', 'setupRequest'));
