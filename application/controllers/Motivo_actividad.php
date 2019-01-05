<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motivo_actividad extends CI_Controller {

        function __construct()
        {
                parent::__construct();
                $this->load->database();
                $this->load->library('grocery_CRUD');
        }


	public function index()
	{
		$this->output->set_template('adminlte');

		$crud = new grocery_CRUD();
                $crud->set_table('motivo_actividad');
                
                $output = $crud->render();
                $output->title = 'Motivos de la Actividad';

                $this->load->view('grocery_crud/basic_crud', (array)$output ) ;
	}

	

}
