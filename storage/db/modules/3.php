<?php 
return array( 'id' => 3, 'created_at' => '', 'updated_at' => '1376529643', 'name' => 'posts', 'active' => 'true', 'settings' => array('id' => array('editable' => 'true', 'editor' => 'true', 'table' => 'false', 'validator' => 'predetermined', 'field' => array('type' => 'hidden', 'attributes' => array('style' => 'display%3Anone', 'class' => 'hidden', ), ), ), 'created_at' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'validator' => 'required', 'field' => array('type' => 'datetime', ), ), 'updated_at' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'validator' => 'required', 'field' => array('type' => 'datetime', ), ), 'title' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'validator' => 'required%7Cmax%3A35%7Cmin%3A3', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '35', ), ), ), 'text' => array('editable' => 'false', 'editor' => 'true', 'table' => 'false', 'validator' => 'required', 'field' => array('type' => 'content_editable', 'attributes' => array('required' => 'true', ), ), ), 'access' => array('editable' => 'true', 'editor' => 'true', 'table' => 'true', 'validator' => 'required', 'field' => array('type' => 'select', 'attributes' => array('required' => 'true', ), ), ), 'lang' => array('editable' => 'true', 'editor' => 'true', 'table' => 'true', 'validator' => 'required', 'field' => array('type' => 'select', 'attributes' => array('required' => 'true', ), ), ), 'section' => array('editable' => 'false', 'editor' => 'true', 'table' => 'false', 'validator' => 'required', 'field' => array('type' => 'select', 'attributes' => array('required' => 'true', ), ), ), 'qr_code' => array('editable' => 'true', 'editor' => 'false', 'table' => 'false', 'validator' => 'predetermined', 'field' => array('type' => 'url', ), ), 'tags' => array('editable' => 'true', 'editor' => 'true', 'table' => 'true', 'validator' => 'false', 'field' => array('type' => 'tags', ), ), 'published' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'validator' => 'false', 'field' => array('type' => 'select', 'attributes' => array('required' => 'true', ), ), ), 'related' => array('editable' => 'true', 'editor' => 'true', 'table' => 'true', 'validator' => 'false', 'field' => array('type' => 'related', ), ), 'order' => array('editable' => 'true', 'editor' => 'false', 'table' => 'true', 'validator' => 'numeric%7Cmin%3A1', 'field' => array('type' => 'number', 'attributes' => array('min' => '1', ), ), ), 'short' => array('editable' => 'true', 'editor' => 'true', 'table' => 'false', 'validator' => 'max%3A150', 'field' => array('type' => 'textarea', 'attributes' => array('maxlength' => '150', 'rows' => '4', 'style' => 'resize%3A%20none%3B', ), ), ), 'link' => array('editable' => 'true', 'editor' => 'true', 'table' => 'false', 'validator' => 'max%3A35', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', ), ), ), 'image' => array('editable' => 'true', 'editor' => 'true', 'table' => 'false', 'validator' => 'false', 'field' => array('type' => 'image_selector', 'attributes' => array('data-select' => 'single', ), ), ), ), 'default_settings' => '', 'link' => 'post', 'access' => '600', 'view_access' => '400',  );