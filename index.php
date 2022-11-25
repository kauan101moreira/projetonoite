<?php
$titulo = "Questionário Online";
$subtitulo = "Questões:";
$migalhaPao = "Página Inicial";
include "cabecalho.php";
include "conexao.php" ;

$query = "select * from questoes order by rand() limit 10";
$resultado = mysqli_query($conexao, $query);
$pontos = 0;
?>
    <form action="./index.php" method="POST">

<?php
while($linha = mysqli_fetch_array($resultado)){
    ?>
       <div style="margin: 10px; width:100%; border:1px solid;">
            <h1> <?php echo $linha["pergunta"]; ?> </h1>
            <input type="radio" name="<?php echo $linha["id"]; ?>" value="A" value="a" />
            <label>A) <?php echo $linha["a"]; ?> </label>
            <br><br>
            <input type="radio" name="<?php echo $linha["id"]; ?>" value="B" value="b" />
            <label>B) <?php echo $linha["b"]; ?> </label>
            <br><br>
            <input type="radio" name="<?php echo $linha["id"]; ?>" value="C" value="c" />
            <label>C) <?php echo $linha["c"]; ?> </label>
            <br><br>
            <input type="radio" name="<?php echo $linha["id"]; ?>" value="D" value="d" />
            <label>D) <?php echo $linha["d"]; ?> </label>
            <br><br>
            <input type="radio" name="<?php echo $linha["id"]; ?>" value="E" value="e" />
            <label>E) <?php echo $linha["e"]; ?> </label>
            <br><br>
        </div>
    <?php
}
?>

        <button type="submit">Enviar respostas</button>
    </form>
    <br><br>

<?php
echo "Pontos: $pontos";
include "rodape.php";
?>