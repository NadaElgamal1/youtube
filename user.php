<?php
include 'connect.php';

function insertuser($name,$email,$passward){
    

    $sql= "INSERT INTO  `user` ( `name` ,`email`,`passward`) 
    values('$name','$email','$passward')";
    $result =mysqli_query(connection(),$sql);
    return mysqli_affected_rows(connection());
}
function selectuser($email,$passward){
    
 
        $sql= "SELECT* FROM  `user` WHERE
        `email`='$email' AND `passward` ='$passward'";
        $result =mysqli_query(connection(),$sql);
        return mysqli_fetch_assoc($result);
    }