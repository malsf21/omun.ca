<?php
  if(!empty($_POST)) {
    require 'common.php';

    $query = "
    UPDATE info
    SET delegates = :delegates
    WHERE email = :email";

    $query_params = array(
      ':delegates' => $_POST['delegates'],
      ':email' => $_SESSION['user']["email"]
    );

    try
    {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
      $_SESSION["info"]["delegates"] = $_POST['delegates'];
      header("Location: home.php?action=updatedDelegates");
      ob_end_flush();
      die("Redirecting to: home.php?action=updatedDelegates");
    }
    catch(PDOException $ex)
    {
      die("Failed to run query: " . $ex->getMessage());
    }
  }
?>
