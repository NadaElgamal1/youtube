<?php
function connection(){
    $con = new mysqli('localhost','root','','youtube');
    return $con;
}