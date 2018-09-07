<?php
class Form extends CI_Controller {
public function __construct() {
parent::__construct();
}
public function form_show() {

// load view_form.php present in views folder
$this->load->view("view_form");
}
public function data_submitted() {

//Storing all  values travelled through POST method
$checkbox_array = $this->input->post('qualification');
$data = array(
'employee_name' => $this->input->post('emp_name'),
'employee_email' => $this->input->post('emp_email'),
'employee_password' => $this->input->post('password'),
'employee_gender' => $this->input->post('select'),
'employee_marital_status'=> $this->input->post('emp_marital_status'),
'employee_qualification' => serialize($checkbox_array),
'employee_address' => $this->input->post('address'),
'employee_upload_file' => $this->input->post('file_upload')
);

//send stored values to the view_form.php page
$this->load->view("view_form", $data);
}
}
?>