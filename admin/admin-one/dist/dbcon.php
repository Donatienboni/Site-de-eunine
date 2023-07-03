<?php

$con = mysqli_connect("localhost","root","","db_site_eunice");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
