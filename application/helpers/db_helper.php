<?php
/*
| -------------------------------------------------------------------------
| misnu88@gmail.com
| -------------------------------------------------------------------------
*/
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('add_foreign_key'))
{

	function add_foreign_key($table, $foreign_key, $references, $on_delete = 'RESTRICT', $on_update = 'RESTRICT')
	{
		$references = explode('(', str_replace(')', '', str_replace('`', '', $references)));

		return "ALTER TABLE `{$table}` ADD CONSTRAINT `{$table}_{$foreign_key}_fk` FOREIGN KEY (`{$foreign_key}`) REFERENCES `{$references[0]}`(`{$references[1]}`) ON DELETE {$on_delete} ON UPDATE {$on_update}";
	}
}

if ( ! function_exists('drop_foreign_key'))
{

	function drop_foreign_key($table, $foreign_key)
	{
		return "ALTER TABLE `{$table}` DROP FOREIGN KEY `{$table}_{$foreign_key}_fk`";
	}
}

if ( ! function_exists('add_trigger'))
{

	function add_trigger($trigger_name, $table, $statement, $time = 'BEFORE', $event = 'INSERT', $type = 'FOR EACH ROW')
	{
		return 'DELIMITER ;;' . PHP_EOL . "CREATE TRIGGER `{$trigger_name}` {$time} {$event} ON `{$table}` {$type}" . PHP_EOL . 'BEGIN' . PHP_EOL . $statement . PHP_EOL . 'END;' . PHP_EOL . 'DELIMITER ;;';
	}
}

if ( ! function_exists('drop_trigger'))
{

	function drop_trigger($trigger_name)
	{
		return "DROP TRIGGER {$trigger_name};";
	}
}
