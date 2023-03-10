<?php

// connect to the database
$db = mysqli_connect("localhost", "my_username", "my_password", "my_database");

// sanitize the input
$username = mysqli_real_escape_string($db, $_POST["username"]);
$password = mysqli_real_escape_string($db, $_POST["password"]);

// construct the query
$query = "INSERT INTO users (name, username) VALUES ('$username', '$password')";

// execute the query
mysqli_query($db, $query);

// close the database connection
mysqli_close($db);
