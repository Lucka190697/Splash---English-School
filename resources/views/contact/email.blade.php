<!DOCTYPE html>
<html>
<head>
    <title>Mensagem enviada pelo site Splash!</title>
    <meta charset="utf-8">
    <style>
        body {
            width: 510px;
            margin: 0;
            padding: 0 20px;
            font-family: "Raleway", sans-serif;
            font-size: 12px;
        }

        h1 {
            font-size: 20px;
        }

        h2 {
            font-size: 16px;
        }
    </style>
</head>
<body>
<h1>
    Nova mensagem enviada pelo portal Splash
</h1>
<hr>
<p>
<h2>Dúvidas Visitante</h2>
<p> Nome: <strong> {{$dados->nome}} </strong></p>
<p> e-mail: <strong> {{$dados->email}} </strong></p>
<p> menssagem:<br> <strong> <?php echo nl2br($dados->mensagem); ?> </strong></p>
<hr>
</body>
</html>
<footer>
    <small>&copy; Copyright 2019, Splash!</small>
</footer>
