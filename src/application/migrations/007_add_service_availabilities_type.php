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

class Migration_Add_service_availabilities_type extends CI_Migration {
    public function up()
    {
        if ( ! $this->db->field_exists('availabilities_type', 'ea_services'))
        {
            $fields = [
                'availabilities_type' => [
                    'type' => 'VARCHAR',
                    'constraint' => '32',
                    'default' => 'flexible',
                    'after' => 'description'
                ]
            ];

            $this->dbforge->add_column('ea_services', $fields);

            $this->db->update('ea_services', ['availabilities_type' => 'flexible']);
        }
    }

    public function down()
    {
        if ($this->db->field_exists('availabilities_type', 'ea_services'))
        {
            $this->dbforge->drop_column('ea_services', 'availabilities_type');
        }
    }
}
