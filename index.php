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
                <div class="offset-3 col-7">
                        <div class="card-header">
                            <h1> <?php echo $linha["pergunta"]; ?> </h1>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <h5><input type="radio" name="<?php echo $linha["id"]; ?>" value="A" value="a" />A) <?php echo $linha["a"]; ?> </h5>
                                <h5><input type="radio" name="<?php echo $linha["id"]; ?>" value="B" value="b" />B) <?php echo $linha["b"]; ?> </h5>
                                <h5><input type="radio" name="<?php echo $linha["id"]; ?>" value="C" value="c" />C) <?php echo $linha["c"]; ?> </h5>
                                <h5><input type="radio" name="<?php echo $linha["id"]; ?>" value="D" value="d" />D) <?php echo $linha["d"]; ?> </h5>
                                <h5><input type="radio" name="<?php echo $linha["id"]; ?>" value="E" value="e" />E) <?php echo $linha["e"]; ?> </h5>
                                <br><br>
                            </blockquote>
                        </div>
                    </div>
                </div>
            <?php
        }
        ?>
        <div class="offset">
            <button class="btn btn-success" type="submit">Enviar respostas</button>
        </div>
    </form>
    <br><br>
<?php
echo "Pontos: $pontos";
include "rodape.php";
?>