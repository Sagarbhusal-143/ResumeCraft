<?php

require '../assets/class/database.class.php';
require '../assets/class/function.class.php';

if($_POST){
    $post=$_POST;

        if($post['resume_id'] && $post["background"]){

            $post['tile']=$post['background'];
        $tile=$db->real_escape_string($post['background']);
        
        
    
    
    $query = "UPDATE resumes SET ";
    $query.="background='$tile' ";
    $query.="WHERE id=($post[resume_id])";

    $db->query($query);

}
}

    