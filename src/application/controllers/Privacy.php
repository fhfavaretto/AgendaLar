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
 * Class Privacy
 *
 * @package Controllers
 */
class Privacy extends CI_Controller {
    /**
     * Remove all customer data (including appointments from the system).
     */
    public function ajax_delete_personal_information()
    {
        try
        {
            $customer_token = $this->input->post('customer_token');

            if (empty($customer_token))
            {
                throw new InvalidArgumentException('Invalid customer token value provided.');
            }

            $this->load->driver('cache', ['adapter' => 'file']);

            $customer_id = $this->cache->get('customer-token-' . $customer_token);

            if (empty($customer_id))
            {
                throw new InvalidArgumentException('Customer ID could not be found, please reload the page and try again.');
            }

            $this->load->model('customers_model');

            $this->customers_model->delete($customer_id);

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'success' => TRUE
                ]));
        }
        catch (Exception $exc)
        {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'exceptions' => [exceptionToJavaScript($exc)]
                ]));
        }
    }
}
