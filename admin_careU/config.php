<?php

$conn = mysqli_connect("localhost", "root", "", "admin_careu");

if (!$conn) {
    echo "Connection Failed";
}