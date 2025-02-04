<?php 
require "models/user.model.php";

$users = getAllUser();

require "views/admin/dashboard.php";
?>