<!DOCTYPE html>
<html>

<head>
    <title>Votação</title>
</head>

<body>
    <h2>
        Votação
    </h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Qual a sua idade? <input type="text" name="num1">
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    // verifica se os números foram enviados pelo formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // verifica se os campos foram preenchidos
        if (is_numeric($_POST['num1'])) {
            $num1 = $_POST['num1']; // Defina a variável $num1 aqui
            if($num1 >= 16){
                echo "<h3>Você tem $num1 anos e pode votar!</h3>";
            } else {
                // caso o valor seja menor que 16, exibe uma mensagem de que a pessoa não possui idade para votar
                echo "<h3>Você ainda não pode votar.</h3>";
            }
        }
    }
?>

</body>

</html>