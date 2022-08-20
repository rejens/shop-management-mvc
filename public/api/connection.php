<?php
$conn = new mysqli("localhost", "root", "", "shop_management");
session_start();
$user_id = $_SESSION['user']['id'];
