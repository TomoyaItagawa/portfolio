<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to = "gawawa.developer@gmail.com";
$title = "gawawa.linkお問い合わせfrom" . htmlspecialchars($_POST['name']);
$message = htmlspecialchars($_POST['message']);
$email = htmlspecialchars($_POST['email']);
$from = "From: " . $email . "\r\n";
$from .= "Return-Path: " . $email;

$send_mail = mb_send_mail($to, $title, $message, $from);

$uri = $_SERVER['HTTP_REFERER'];
header("Location: " . $uri)
?>