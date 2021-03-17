<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <title>Confirmação Delete</title>
</head> 
<body>

<?php 
$idCont = filter_input(INPUT_GET,'idCont', FILTER_SANITIZE_NUMBER_INT);

echo "<div class=\"alert alert-primary\" role=\"alert\">";
echo '<div class=\"pergunta\">Quer mesmo excluir esse registro?</div>';
echo "<a href='deletar-dados.php?id=$idCont'>sim</a>";
echo "<a href='mostrar-dados.php'>não</a>";
echo "</div>";
?>

</body>
<html>
