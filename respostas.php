<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questões</title>
</head>
<body>
    <h1>Questionário</h1>
    <form action="./questoes.php" method="post">


<?php
include "conexao.php" ;

$query = "select * from questoes order by rand() limit 10";
$resultado = mysqli_query($conexao, $query);
$certas = 0;

while($linha = mysqli_fetch_array($resultado)){
    ?>
       <div style="width:100%; border:1px solid;">
            <h1> <?php echo $linha["pergunta"]; ?> </h1>
            <input type="radio" name="<?php echo $linha["id"] ?>" value="A" value="a" />
            <label>A) <?php echo $linha["a"]; ?> </label>
            <br><br>
            <input type="radio" name="<?php echo $linha["id"] ?>" value="B" value="b" />
            <label>B) <?php echo $linha["b"]; ?> </label>
            <br><br>
            <input type="radio" name="<?php echo $linha["id"] ?>" value="C" value="c" />
            <label>C) <?php echo $linha["c"]; ?> </label>
            <br><br>
            <input type="radio" name="<?php echo $linha["id"] ?>" value="D" value="d" />
            <label>D) <?php echo $linha["d"]; ?> </label>
            <br><br>
            <input type="radio" name="<?php echo $linha["id"] ?>" value="E" value="e" />
            <label>E) <?php echo $linha["e"]; ?> </label>
            <br><br>
        </div>
    <?php
    
}


?>
        <button type="submit">Enviar respostas</button>
    </form>
</body>
</html>