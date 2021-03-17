<?php

    include("conexao.php");

    $idCont = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    try {
        $stmt = $pdo->prepare("DELETE FROM tbContact  WHERE idContact='$idCont'");
        $stmt -> execute();

        $pdo=null;

        header("Location: mostrar-dados.php");

    } catch (PDOException $e) {
        "ERROR: ".$e->getMessage();
    }
?>