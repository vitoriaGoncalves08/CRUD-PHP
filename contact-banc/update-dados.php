<?php
    require("conexao.php");

    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $subject = $_POST['txtSubject'];
    $message = $_POST['txtMessage']; 
    $idCont = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        try {
            $stmt = $pdo->prepare("UPDATE tbContact SET nameContact = '$name', emailContact = '$email', subjectContact = '$subject', menssageContact = '$message'  WHERE idContact = '$idCont'");
            $stmt -> execute();
            echo "<script> alert('novos dados');</script>";
            

        } catch (PDOException $e) {
            echo "ERROR: ".$e->getMessage();
        }  

?>