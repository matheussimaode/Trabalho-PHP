<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $loginComSucesso = False;


        $login = $_POST("nomeDoUsuario");
        $senha = $_POST("senhaDoUsuario");

        $nomeValidoDeUsuario = "aluno1";
        $senhaValidaDeUsuario = 123;


        echo "<script>alert('".$login."')</script>";
        echo "<script>alert('".$senha."')</script>";

        if($login == $nomeValidoDeUsuario && $senha == $senhaValidaDeUsuario ){
                $loginComSucesso = true;
        }

        echo"alert('$loginComSucesso <br>')";
        echo $loginComSucesso;
        echo $loginComSucesso;
    
        if($loginComSucesso == false){

            echo "<script>alert('".$loginComSucesso."')</script>";
            echo "<script>alert('$loginComSucesso FALHOU')</script>";
        }else{
    
            echo"<script>alert('".$loginComSucesso."')</script>";
            echo"<script>alert('ou seja deu certo')</script>";

        }


    ?>

   

</body>
</html>