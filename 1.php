<?php

$statement = $_GET['statement'];
$description = $_GET['description'];

$conn = mysqli_connect('localhost', 'root', '12345', 'madadgaar');

$insert_query = "INSERT INTO workspace('statement','description') values('$statement','$description')";
