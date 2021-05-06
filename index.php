<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test PHP</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

        <style>
            textarea{
                resize: none;
            }
        </style>
    </head>


    <body class="card " style="max-width: 50%; margin: 0 auto; padding: 20px;">
        <form method="POST" class="form-group">
            <h5>Nome:</h5>
            <input type="text" placeholder="Digite seu nome" name="name" class="form-control"></input>

            <h5>Email:</h5>
            <input type="email" placeholder="Digite seu email" name="email" class="form-control"></input>

            <h5>Comentário:</h5>
            <textarea placeholder="Digite seu comentário" name="comment" class="form-control"></textarea>
            <br/>
            <button type="submit" class="btn btn-primary d-flex justify-content-start" >Enviar</button>
        </form>



        <?php
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $comment = addslashes($_POST['comment']);

        ?>    
    </body> 
</html>