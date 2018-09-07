<html>
<head>
<title>Codeigniter Form Helper</title>
<meta name="robots" content="noindex, nofollow">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
<div id="content">
<h2 id="form_head">Codelgniter Form Helper Demo</h2>
<div id="form_input">
<?php

//create  form open tag
echo form_open('form/data_submitted');

//create label
echo form_label('Employee Name');

//create name input field
$data_name = array(
'name' => 'emp_name',
'id' => 'emp_name_id',
'class' => 'input_box',
'placeholder' => 'Please Enter Name'
);
echo form_input($data_name);echo "<br>";echo "<br>";
echo form_label('Employee Email-ID');


//create email input field
$data_email = array(
'type' => 'email',
'name' => 'emp_email',
'id' => 'e_email_id',
'class' => 'input_box',
'placeholder' => 'Please Enter Email'
);
echo form_input($data_email);echo "<br>";echo "<br>";
echo form_label('Password');

//create password field
$data_password = array(
'name' => 'password',
'id' => 'password_id',
'class' => 'input_box',
'placeholder' => 'Please Enter Password'
);
echo form_password($data_password);echo "<br>";echo "<br>";
echo form_label('Gender');

//create dropdown box
$data_gender = array(
'Male' => 'Male',
'Female' => 'Female'
);
echo form_dropdown('select', $data_gender, 'Male', 'class="dropdown_box"');
echo "<br>";echo "<br>";
echo form_label('Marital status');
echo "<div id = 'radio_list'>";

//create radio button
$data_radio1 = array(
'name' => 'emp_marital_status',
'value' => 'Unmarried',
'checked' => TRUE,
);
echo form_radio($data_radio1);

echo form_label('Unmarried');
$data_radio2 = array(
'name' => 'emp_marital_status',
'value' => 'Married',
);
echo form_radio($data_radio2);
echo form_label('Married');

echo "</div>";

echo "<br>";echo "<br>";
echo form_label('Qualification');

//create checkbox
$data_checkbox1 = array(
'name' => 'qualification[]',
'value' => 'Graduation'
);
echo "<br>";echo "<br>";
echo "<div id = 'checkbox_list'>";
echo form_checkbox($data_checkbox1);
echo form_label('Graduation');
$data_checkbox2 = array(
'name' => 'qualification[]',
'value' => 'Post Graduation'
);
echo form_checkbox($data_checkbox2);
echo form_label('Post-Graduation');
echo "</div>";echo "<br>";echo "<br>";
echo form_label('Address');
echo "<div class='textarea_input'>";

//create textarea
$data_textarea = array(
'name' => 'address',
'rows' => 5,
'cols' => 32
);
echo form_textarea($data_textarea);
echo "</div>";
echo "<br>";echo "<br>";
echo form_label('Upload Image');
echo "<div class='upload'>";

//create upload section
$data_upload = array(
'type' => 'file',
'name' => 'file_upload',
'value' => 'upload resume'
);
echo form_upload($data_upload);
echo "</div>";
?>
</div>
<div id="form_button">


<?php echo form_reset('reset', 'Reset', "class='submit'"); ?>

<?php echo form_submit('submit', 'Submit', "class='submit'"); ?>
</div>


<?php echo form_close(); ?>
<?php

//check whether the value send from data_submitted() function of controller is set or not
if (isset($employee_name)) {
$checkbox_value = unserialize($employee_qualification);
echo "<div id='content_result'>";
echo "<h3 id='result_id'>You have submitted these values</h3>";
echo "<div id='result_show'>";
echo "<label class='label_output'>Entered Employee Name : </label>" . $employee_name; echo "<br>";echo "<br>";
echo "<label class='label_output'>Entered Employee Email : </label>" . $employee_email;echo "<br>";echo "<br>";
echo "<label class='label_output'>Entered Password : </label>" . $employee_password;echo "<br>";echo "<br>";
echo "<label class='label_output'>Entered Gender : </label>" . $employee_gender;echo "<br>";echo "<br>";
echo "<label class='label_output'>Entered Marital status : </label>" . $employee_marital_status;echo "<br>";echo "<br>";
echo "<label class='label_output'>Entered Qualification : </label>";
echo "<ul class='qual_output'>";
if (isset($checkbox_value) && $checkbox_value != NULL) {
foreach ($checkbox_value as $value) {
echo "<li>" . $value . "</li>";
}
}
echo "</ul>";
echo "<br>";echo "<br>";
echo "<label class='label_output'>Entered Address : </label><pre class='address_output'>" . $employee_address . "</pre>";echo "<br>";echo "<br>";
echo "<label class='label_output'>Uploaded Image : </label>" . $employee_upload_file;echo "<br>";echo "<br>";
echo "<div>";
echo "</div>";
}
?>
</div>
</div>
</body>
</html>