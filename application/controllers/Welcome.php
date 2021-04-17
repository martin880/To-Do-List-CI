<?php
defined('BASEPATH') OR exit('Tidak ada akses skrip langsung yang diizinkan');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

		$this->load->model('crud_model');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function insert(){
		if ($this->input->is_ajax_request()){

			$this->form_validation->set_rules('todo_name', 'Name', 'required');

			if ($this->form_validation->run() == FALSE)
			{
					$data = array('response' => 'error', 'message' => validation_errors());
			}
			else
			{
					$ajax_data = $this->input->post();

					if($this->crud_model->insert_entry($ajax_data)){
						$data = array('response' => 'success', 'message' => 'Tambah data sukses');
					}else{
						$data = array('response' => 'success', 'message' => 'failed');
					}	
			}

			echo json_encode($data);
		
		}else{
			echo "Tidak ada akses skrip langsung yang diizinkan";
		}
	}

	public function fetch(){
		if ($this->input->is_ajax_request()) {
			if ($posts = $this->crud_model->get_entries()) {
				$data = array('response' => 'success', 'posts' => $posts);
			}else{
				$data = array('response' => 'error', 'message' => 'Gagal mengambil data');
			}
			echo json_encode($data);
			}else{
				echo "Tidak ada akses skrip langsung yang diizinkan";
			}
	}

	public function delete(){
		if($this->input->is_ajax_request()){
			$del_id = $this->input->post('del_id');

			if ($this->crud_model->delete_entry($del_id)){
				$data = array('response' => 'success');
			}else{
				$data = array('response' => 'error');
			}

			echo json_encode($data);
		}else{
			echo "Tidak ada akses skrip langsung yang diizinkan";
		}
	}

	public function edit(){
		if($this->input->is_ajax_request()){
			$edit_id = $this->input->post('edit_id');

			if ($post = $this->crud_model->edit_entry($edit_id)){
				$data = array('response' => 'success', 'post' => $post);
			}else{
				$data = array('response' => 'error', 'message' => 'gagal mengambil record');
			}

			echo json_encode($data);
		}else{
			echo "Tidak ada akses skrip langsung yang diizinkan";
		}
	}

	public function update()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('edit_todo_name', 'Name', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('response' => 'error', 'message' => validation_errors());
			} else {
				$data['id'] = $this->input->post('edit_record_id');
				$data['todo_name'] = $this->input->post('edit_todo_name');

				if ($this->crud_model->update_entry($data)) {
					$data = array('response' => 'success', 'message' => 'Sukses memperbaharui data');
				} else {
					$data = array('response' => 'error', 'message' => 'Gagal memperbaharui data');
				}
			}

			echo json_encode($data);
		} else {
			echo "Tidak ada akses skrip langsung yang diizinkan";
		}
	}
}
