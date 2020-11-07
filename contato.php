<?php
include('conexao.php')
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="js/funcoes.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <main>
        <?php
        include('menu.html');
        ?>

            <header>
                <h1 id="titulo_pagina">Contatos</h1>
            </header>

            <hr>

            <section class="contatos">
                <div class="meio_ct">
                    <img src="./imagens/email.png">contato@fullstackeletro.com
                </div>

                <div class="meio_ct">
                    <img src="./imagens/whatsapp.png">(011) 9999-9999
                </div>
            </section>

            <form>
                <div class="form-group mx-5">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="Digite seu nome completo" style="width: 400px;">
                </div>

                <div class="form-group mx-5">
                    <label for="email">Mensagem:</label>
                    <input type="text" class="form-control" id="msg" aria-describedby="msg" placeholder="Digite sua mensagem" style="width: 400px; height: 100px">
                </div>
                <button type="submit" class="mx-5 btn btn-primary">Enviar</button>
            </form>

            <!-- <section class="formulario">
            <form method="post" action="">
                <h4>Nome:</h4>
                <input type="text" name="nome" placeholder="Digite seu nome completo" style="width: 500px;">

                <h4>Mensagem:</h4>
                <textarea name="msg" style="width: 500px;" placeholder="Deixe sua mensagem"></textarea>
                <input type="submit" value="Enviar">
            </form> -->

            <br><br><br>

            <?php
            $sql = "select * from comentarios";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
                    echo "Data: ", $rows['data'], "<br>";
                    echo "Nome: ", $rows['nome'], "<br>";
                    echo "Mensagem: ", $rows['msg'], "<br>";
                    //header("refresh:5;");
                }
            } else {
                echo "Nenhum comentário";
            }
            ?>

            </section>

            <br><br><br><br><br>

            <hr>

            <footer id="rodape">
                <p><b>Formas de Pagamento:</b></p>
                <img src="./imagens/formas de pagamento.png" alt="Formas de Pagamento">
                <p>&copy;Recode Pro</p>
            </footer>
    </main>
</body>

</html>