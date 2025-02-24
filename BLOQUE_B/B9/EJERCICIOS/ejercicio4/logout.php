<?php
require 'includes/sessions.php';
logout();
header('Location: login.php');
exit;