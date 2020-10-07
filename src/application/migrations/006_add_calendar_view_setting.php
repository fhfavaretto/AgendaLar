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

class Migration_Add_calendar_view_setting extends CI_Migration {
    public function up()
    {
        if ( ! $this->db->field_exists('calendar_view', 'ea_user_settings'))
        {
            $fields = [
                'calendar_view' => [
                    'type' => 'VARCHAR',
                    'constraint' => '32',
                    'default' => 'default'
                ]
            ];

            $this->dbforge->add_column('ea_user_settings', $fields);

            $this->db->update('ea_user_settings', ['calendar_view' => 'default']);
        }
    }

    public function down()
    {
        if ($this->db->field_exists('calendar_view', 'ea_user_settings'))
        {
            $this->dbforge->drop_column('ea_user_settings', 'calendar_view_calendar');
        }
    }
}
