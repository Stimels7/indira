<?php 
return array( 'id' => 11, 'created_at' => '1373929440', 'updated_at' => '1376919129', 'name' => 'users', 'active' => 'true', 'settings' => array('id' => array('editable' => 'true', 'editor' => 'true', 'table' => 'true', 'frontend' => 'true', 'validator' => 'predetermined', 'field' => array('type' => 'hidden', 'attributes' => array('style' => 'display%3Anone', 'class' => 'hidden', ), ), ), 'created_at' => array('editable' => 'true', 'editor' => 'false', 'table' => 'true', 'frontend' => 'false', 'validator' => 'required', 'field' => array('type' => 'datetime', ), ), 'updated_at' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required', 'field' => array('type' => 'datetime', ), ), 'name' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'frontend' => 'true', 'validator' => 'required%7Cmax%3A25%7Cmin%3A2', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '25', ), ), ), 'email' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'frontend' => 'true', 'validator' => 'required%7Cemail%7Cdifferent%3Aname', 'field' => array('type' => 'email', 'attributes' => array('required' => 'true', ), ), ), 'access' => array('editable' => 'true', 'editor' => 'true', 'table' => 'true', 'false' => 'false', 'validator' => 'numeric%7Cmin%3A1%7Cmax%3A777', 'field' => array('type' => 'select', 'attributes' => array('required' => 'true', ), ), ), 'password' => array('editable' => 'false', 'editor' => 'true', 'table' => 'false', 'frontend' => 'true', 'validator' => 'required%7Cmax%3A32%7Cmin%3A5%7Cdifferent%3Aname%7Cdifferent%3Aemail', 'field' => array('type' => 'password', 'attributes' => array('required' => 'true', 'maxlength' => '32', ), ), ), 'promocode' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'true', 'validator' => 'predetermined', 'field' => array('type' => 'text', ), ), 'first_name' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A25%7Cmin%3A2', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '25', ), ), ), 'last_name' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A25%7Cmin%3A2', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '25', ), ), ), 'phone' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A15%7Cnumeric', 'field' => array('type' => 'tel', 'attributes' => array('required' => 'true', 'maxlength' => '15', ), ), ), 'country' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A30', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '30', ), ), ), 'region' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A30', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '30', ), ), ), 'city' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A30', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '30', ), ), ), 'address_line_one' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A50', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '50', ), ), ), 'address_line_two' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A50', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '50', ), ), ), 'zip_code' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A15%7Cnumeric', 'field' => array('type' => 'number', 'attributes' => array('required' => 'true', 'maxlength' => '15', ), ), ), 'notify_via_email' => array('editable' => 'false', 'editor' => 'true', 'table' => 'false', 'frontend' => 'false', 'validator' => 'predetermined', 'field' => array('type' => 'pretty_checkbox', ), ), 'newsletter_subscription' => array('editable' => 'true', 'editor' => 'true', 'table' => 'false', 'frontend' => 'true', 'validator' => 'predetermined', 'field' => array('type' => 'pretty_checkbox', ), ), ), 'default_settings' => array('id' => array('editable' => 'true', 'editor' => 'true', 'table' => 'true', 'frontend' => 'true', 'validator' => 'predetermined', 'field' => array('type' => 'hidden', 'attributes' => array('style' => 'display%3Anone', 'class' => 'hidden', ), ), ), 'created_at' => array('editable' => 'true', 'editor' => 'false', 'table' => 'true', 'frontend' => 'false', 'validator' => 'required', 'field' => array('type' => 'datetime', ), ), 'updated_at' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required', 'field' => array('type' => 'datetime', ), ), 'name' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'frontend' => 'true', 'validator' => 'required%7Cmax%3A15%7Cmin%3A2', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '15', ), ), ), 'email' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'frontend' => 'true', 'validator' => 'required%7Cemail%7Cdifferent%3Aname', 'field' => array('type' => 'email', 'attributes' => array('required' => 'true', ), ), ), 'access' => array('editable' => 'true', 'editor' => 'true', 'table' => 'true', 'false' => 'false', 'validator' => 'numeric%7Cmin%3A1%7Cmax%3A777', 'field' => array('type' => 'select', 'attributes' => array('required' => 'true', ), ), ), 'password' => array('editable' => 'false', 'editor' => 'true', 'table' => 'false', 'frontend' => 'true', 'validator' => 'required%7Cmax%3A32%7Cmin%3A5%7Cdifferent%3Aname%7Cdifferent%3Aemail', 'field' => array('type' => 'password', 'attributes' => array('required' => 'true', 'maxlength' => '32', ), ), ), 'first_name' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A25%7Cmin%3A2', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '25', ), ), ), 'last_name' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A25%7Cmin%3A2', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '25', ), ), ), 'phone' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A15%7Cnumeric', 'field' => array('type' => 'tel', 'attributes' => array('required' => 'true', 'maxlength' => '15', ), ), ), 'country' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A30', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '30', ), ), ), 'region' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A30', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '30', ), ), ), 'city' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A30', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '30', ), ), ), 'address_line_one' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A50', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '50', ), ), ), 'address_line_two' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A50', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '50', ), ), ), 'zip_code' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'frontend' => 'false', 'validator' => 'required%7Cmax%3A15%7Cnumeric', 'field' => array('type' => 'number', 'attributes' => array('required' => 'true', 'maxlength' => '15', ), ), ), 'notify_via_email' => array('editable' => 'false', 'editor' => 'true', 'table' => 'false', 'frontend' => 'false', 'validator' => 'predetermined', 'field' => array('type' => 'pretty_checkbox', ), ), 'newsletter_subscription' => array('editable' => 'true', 'editor' => 'true', 'table' => 'false', 'frontend' => 'true', 'validator' => 'predetermined', 'field' => array('type' => 'pretty_checkbox', ), ), ), 'link' => 'false', 'access' => '777', 'view_access' => '777',  );