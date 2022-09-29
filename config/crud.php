<?php

session_start(); // Starting session
include_once('conection.php'); // Start connection with database

// getAllContacts
$query = "SELECT * FROM contacts";
$stmt = $conn->prepare($query);
$stmt->execute();
$getAllContacts = $stmt->fetchAll();
