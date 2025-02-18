<?php

require '../assets/class/database.class.php';
require '../assets/class/function.class.php';

if($_POST){
    $post=$_POST;

    if($post['password']){

         $password=md5($db->real_escape_string($post['password']));
         $email_id=$fn->getSession('email');

         $db->query("UPDATE users SET password='$password' WHERE email_id='$email_id'");

         $fn->setAlert('password changed successfully !');
         $fn -> redirect('../login.php');

         
    }else{
        $fn->setError('please enter your new password!');
        $fn -> redirect('../change-password.php');
    }
}else{

    $fn -> redirect('../change-password.php');
       }