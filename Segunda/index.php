<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
</head>
<body>
    <style>
        body{
            max-width: 1500px;
            margin: auto;
            background-color: #1d3557;
            color:white;
            text-align: center;
        }
        h1{
            color:white;
            background-color: #e63946;
            padding: 30px;
        }
        h1:hover{
            color:yellow;
        }
    </style>

        <h1>Tablas de Multiplicar</h1>
        <hr>
    <?php
        //for
        for($i = 1; $i<=10; $i++){
            for($ii = 1; $ii<=20; $ii++){
                $multiplica = $i*$ii; 
                print "$i  *  $ii = $multiplica <br>";
                $ii+1;
            }
         $i+1;
         print "<br><br> <hr>";
        }
    ?>

</body>
</html>