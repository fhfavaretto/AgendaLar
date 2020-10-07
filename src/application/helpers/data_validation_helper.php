<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * CalendLar - Open Source Agendamento Web
 *
 * @package     CalendLar
 * @author      Fabio Henrique Favaretto <favarettofabio@hotmail.com>
 * @copyright   Copyright (c) 2020 - 2021, 
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://github.com/fhfavaretto
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Check if a string date is valid for insertion or update
 * to the database.
 *
 * @param string $datetime The given date.
 * @return bool Returns the validation result.
 *
 * @link http://stackoverflow.com/a/8105844/1718162 [SOURCE]
 */
function validate_mysql_datetime($datetime)
{
    $dt = DateTime::createFromFormat('Y-m-d H:i:s', $datetime);
    return ($dt) ? TRUE : FALSE;
}
