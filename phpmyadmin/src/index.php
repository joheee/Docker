<?php

$con = new mysqli('dev_server','root','1/xdx','mysql');

if($con) {
    echo "connected!";
}