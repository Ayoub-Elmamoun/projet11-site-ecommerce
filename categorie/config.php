<?php
$conn = mysqli_connect('localhost', 'admin', 'admin', 'site-ecommerce');

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
