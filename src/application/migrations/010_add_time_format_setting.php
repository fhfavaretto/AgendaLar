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

class Migration_Add_time_format_setting extends CI_Migration {
    public function up()
    {
        $this->load->model('settings_model');

        try
        {
            $this->settings_model->get_setting('time_format');
        }
        catch (Exception $exception)
        {
            $this->settings_model->set_setting('time_format', 'regular');
        }
    }

    public function down()
    {
        $this->load->model('settings_model');

        $this->settings_model->remove_setting('time_format');
    }
}
