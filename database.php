<?php
$connection = mysqli_connect('localhost', 'root', '', 'youcodescrumboard');
if (!$connection) {
    die('Erreur connection'.mysqli_connect_error()); //used to show connection failed error
}
