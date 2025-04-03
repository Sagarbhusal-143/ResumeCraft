<?php

require '../assets/class/database.class.php';
require '../assets/class/function.class.php';

$slug=$_GET['resume']??'';
$resume = $db->query("SELECT * FROM resumes WHERE (slug='$slug' AND user_id=".$fn->Auth()['id'].")");
$resume = $resume->fetch_assoc();
if(!$resume){
    $fn->redirect('myresumes.php');
}

$expes = $db->query("SELECT * FROM experience WHERE (resume_id=".$resume['id']." ) ");
$expes = $expes->fetch_all(1);

$educs = $db->query("SELECT * FROM educations WHERE (resume_id=".$resume['id']." )" );
$educs= $educs->fetch_all(1);

$skills = $db->query("SELECT * FROM skills WHERE (resume_id=".$resume['id']." )" );
$skills= $skills->fetch_all(1);

foreach($resume as $index => $value)
$columns='';
$values='';

unset($resume['id']);
unset($resume['slug']);
unset($resume['updated_at']);
$resume['resume_title'] .= ' clone_'.time();


foreach($resume as $index=>$value){
$columns.=$index.',';
$values.="'$value',";
}


$authid = $fn->Auth()['id'];

$columns.='slug,updated_at';
$values.="'".$fn->randomstring()."',".time();


try{
$query = "INSERT INTO resumes";
$query.="($columns) ";
$query.="VALUES($values)";



$db->query($query);

$new_resume_id=$db->insert_id;

foreach($expes as $exp){
    foreach($exp as $index => $value){
    $exp[$index] = $db->real_escape_string($value);
}
    $query2 = 'INSERT INTO experience(resume_id,position,company,job_desc,started,ended) ';
    $query2 .= "VALUES ($new_resume_id,'{$exp['position']}','{$exp['company']}','{$exp['job_desc']}','{$exp['started']}','{$exp['ended']}')";
    $db->query($query2);
}

foreach($educs as $edu){
    foreach($exp as $index => $value){
    $edu[$index] = $db->real_escape_string($value);
}
    $query3 = 'INSERT INTO educations(resume_id,course,institute,started,ended) ';
    $query3 .= "VALUES ($new_resume_id,'{$edu['course']}','{$edu['institute']}','{$edu['started']}','{$edu['ended']}')";
    $db->query($query3);
}

foreach($skills as $skill){
    foreach($exp as $index => $value){
    $skill[$index] = $db->real_escape_string($value);
}
    $query4 = 'INSERT INTO skills(resume_id,skill) ';
    $query4 .= "VALUES ($new_resume_id,'{$skill['skill']}')";
    $db->query($query4);
}



$fn->setAlert('Clone created Successfully !');
$fn -> redirect("../myresumes.php");

}catch(Exception $error){
$fn->setError($error->getMessage());
$fn -> redirect("../myresumes.php");
}

?> 

