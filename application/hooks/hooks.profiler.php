<?php
/*
| -------------------------------------------------------------------------
| misnu88@gmail.com
| -------------------------------------------------------------------------
*/
class ProfilerEnabler
{
	function enableProfiler(){		
		$CI = &get_instance();
		$CI->output->enable_profiler( config_item('enable_profiling') );		
	}
}
?>
