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

class Migration_Add_service_attendants_number extends CI_Migration {
    public function up()
    {
        if ( ! $this->db->field_exists('attendants_number', 'ea_services'))
        {
            $fields = [
                'attendants_number' => [
                    'type' => 'INT',
                    'constraint' => '11',
                    'default' => '1',
                    'after' => 'availabilities_type'
                ]
            ];

            $this->dbforge->add_column('ea_services', $fields);

            $this->db->update('ea_services', ['attendants_number' => '1']);
        }
    }

    public function down()
    {
        if ($this->db->field_exists('attendants_number', 'ea_services'))
        {
            $this->dbforge->drop_column('ea_services', 'attendants_number');
        }
    }
}
