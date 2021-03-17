<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <title>Registros de Contato</title>
</head>  
<header class="header">

     <nav>
        <label class="menu">Form Contact</label>
        <ul>
            <li><a href="../index.php">Home</a></li>
        </ul>
    </nav>
    </header>
    <body>
        <h1 class="dados">Contact Details</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#Cod</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col">#Delete</th>
            <th scope="col">#Update</th>
          </tr>
        </thead>
        <tbody>

<?php
     include("conexao.php");
    
    try {
        $stmt = $pdo->prepare("SELECT * FROM tbContact");
        $stmt -> execute();

        $pdo = null;

        while($row = $stmt -> fetch(PDO::FETCH_BOTH)){
            echo '<tr>';
            echo '<th scope="row">' .$row ['idContact'].'</th>';
            echo '<th scope="row">' .$row ['nameContact'].'</th>';
            echo '<th scope="row">' .$row ['emailContact'].'</th>';
            echo '<th scope="row">' .$row ['subjectContact'].'</th>';
            echo '<th scope="row">' .$row ['menssageContact'].'</th>';
            echo '<th scope="row">'."<a href='confirmacao-delete.php?idCont=".$row['idContact'] . "'>Delete</a>".'</th>';

            echo '<th scope="row">'."<a href='../index.php?idCont=$row[idContact]&contact=$row[nameContact]&econtact=$row[emailContact]&scontact=$row[subjectContact]&mcontact=$row[menssageContact]'>Update</a>".'</th>';
            echo '</tr>';
        }

    } catch (PDOException $e) {
        echo "ERROR: ".$e->getMessage();
    }
?>
</body>
</html>