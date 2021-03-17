<?php
      include("conexao.php");

    $nameContact = $_POST ['txtName'];
    $emailContact = $_POST ['txtEmail'];
    $subjectContact = $_POST ['txtSubject'];
    $messageContact = $_POST ['txtMessage'];
    $idCont = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
       
      try {
         $stmt = $pdo->prepare("INSERT INTO tbContact VALUES (null, '$nameContact', '$emailContact','$subjectContact', '$messageContact')");
         $stmt -> execute();

         $pdo = null;

         header('Location: mostrar-dados.php');

      } catch (PDOException $e) {
         echo "ERROR: ".$e->getMessage();
      }




?>