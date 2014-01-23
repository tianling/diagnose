<?php
function get_user_id() {return $_SESSION['admin_id'];}
function get_controller() {return $GLOBALS['_C'];}
function get_action() {return $GLOBALS['_V'];}
function get_user_name() {return $_SESSION['name'];}
?>