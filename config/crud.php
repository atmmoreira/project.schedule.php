<?php

session_start(); // Starting session
include_once('conection.php'); // Start connection with database

$data = $_POST;

if (!empty($data)) {

  if ($data["type"] === "create") {
    $name = $data["name"];
    $phone = $data["phone"];
    $observation = $data["observation"];

    $query = "INSERT INTO contacts (name, phone, observation) VALUES (:name, :phone, :observation)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":observation", $observation);

    try {
      $stmt->execute();
      $_SESSION['message'] = "Contato criado com sucesso";
    } catch (PDOException $e) {
      // Error conection
      $error = $e->getMessage();
      echo "Erro: $error";
    }
  } else if ($data["type"] === "edit") {
    var_dump($data);

    $id = $data["id"];
    $name = $data["name"];
    $phone = $data["phone"];
    $observation = $data["observation"];

    $query = "UPDATE contacts
              SET name = :name, phone = :phone, observation = :observation
              WHERE id = :id";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":observation", $observation);

    try {
      $stmt->execute();
      $_SESSION['message'] = "Contato editado com sucesso";
    } catch (PDOException $e) {
      // Error conection
      $error = $e->getMessage();
      echo "Erro: $error";
    }
  }
  // Redirection
  header("Location:" . '../index.php');
} else {
  $id;
  if (!empty($_GET)) {
    $id = $_GET['id'];
  }

  if (!empty($id)) {
    // getContactById
    $query = "SELECT * FROM contacts WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $getContactById = $stmt->fetch();
  } else {
    // getAllContacts
    $query = "SELECT * FROM contacts";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $getAllContacts = $stmt->fetchAll();
  }
}

// Close Conection with Database
$conn = null;
