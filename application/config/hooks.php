<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| misnu88@gmail.com
| -------------------------------------------------------------------------
*/
$hook['post_controller_constructor'][] = array(
	'class'    => 'ProfilerEnabler',
	'function' => 'enableProfiler',
	'filename' => 'hooks.profiler.php',
	'filepath' => 'hooks',
	'params'   => array()
);