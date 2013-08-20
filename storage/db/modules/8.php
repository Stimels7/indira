<?php 
return array( 'id' => 8, 'created_at' => '1371357308', 'updated_at' => '1376867814', 'name' => 'admins', 'active' => 'true', 'settings' => array('id' => array('editable' => 'true', 'editor' => 'true', 'table' => 'false', 'validator' => 'predetermined', 'field' => array('type' => 'hidden', 'attributes' => array('style' => 'display%3Anone', 'class' => 'hidden', ), ), ), 'created_at' => array('editable' => 'true', 'editor' => 'false', 'table' => 'true', 'validator' => 'required', 'field' => array('type' => 'datetime', ), ), 'updated_at' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'validator' => 'required', 'field' => array('type' => 'datetime', ), ), 'name' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'validator' => 'required%7Cmax%3A25%7Cmin%3A3%7Cdifferent%3Apassword%7Cdifferent%3Aemail', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '25', ), ), ), 'password' => array('editable' => 'false', 'editor' => 'true', 'table' => 'false', 'validator' => 'required%7Cmax%3A32%7Cmin%3A5%7Cdifferent%3Aname%7Cdifferent%3Aemail', 'field' => array('type' => 'password', 'attributes' => array('required' => 'true', 'maxlength' => '32', ), ), ), 'access' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'validator' => 'required', 'field' => array('type' => 'select', 'attributes' => array('required' => 'true', ), ), ), 'email' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'validator' => 'required%7Cemail%7Cdifferent%3Apassword%7Cdifferent%3Aname', 'field' => array('type' => 'email', 'attributes' => array('required' => 'true', ), ), ), 'notify_via_email' => array('editable' => 'false', 'editor' => 'true', 'validator' => 'predetermined', 'field' => array('type' => 'pretty_checkbox', ), ), ), 'default_settings' => array('id' => array('editable' => 'true', 'editor' => 'true', 'table' => 'false', 'validator' => 'predetermined', 'field' => array('type' => 'hidden', 'attributes' => array('style' => 'display%3Anone', 'class' => 'hidden', ), ), ), 'created_at' => array('editable' => 'true', 'editor' => 'false', 'table' => 'true', 'validator' => 'required', 'field' => array('type' => 'datetime', ), ), 'updated_at' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'validator' => 'required', 'field' => array('type' => 'datetime', ), ), 'name' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'validator' => 'required%7Cmax%3A25%7Cmin%3A3%7Cdifferent%3Apassword%7Cdifferent%3Aemail', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '25', ), ), ), 'password' => array('editable' => 'false', 'editor' => 'true', 'table' => 'false', 'validator' => 'required%7Cmax%3A32%7Cmin%3A5%7Cdifferent%3Aname%7Cdifferent%3Aemail', 'field' => array('type' => 'password', 'attributes' => array('required' => 'true', 'maxlength' => '32', ), ), ), 'access' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'validator' => 'required', 'field' => array('type' => 'select', 'attributes' => array('required' => 'true', ), ), ), 'email' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'validator' => 'required%7Cemail%7Cdifferent%3Apassword%7Cdifferent%3Aname', 'field' => array('type' => 'email', 'attributes' => array('required' => 'true', ), ), ), 'notify_via_email' => array('editable' => 'false', 'editor' => 'true', 'validator' => 'predetermined', 'field' => array('type' => 'pretty_checkbox', ), ), ), 'link' => 'false', 'access' => '777', 'view_access' => '400',  );