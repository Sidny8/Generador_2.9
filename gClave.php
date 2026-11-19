<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coci 2010/2011 Enero AVION</title>
    <link rel="stylesheet" href="style/Problema3.css">
</head>
<body>
    <h1>Coci 2010/2011 Enero AVION</h1>
    <div class= contenedor>
        <style>
            .input-alto {
            height: 15px;
            padding: 8px;
            font-size: 16px;
            width: 120px;
            border: rgb(109, 54, 17) 2px solid;
            background-color:rgb(255, 215, 169);
            border-radius: 25%;
            text-align: center;
            position: relative;
            z-index: 10;
            pointer-events: auto !important;
        }</style>
        <form method = "POST" action ="">
            <main class="todo">
                <div class="contenedor">
                    <div class = "texto">
                        <label for = "num1">&emsp;&emsp; Codigo 1: &emsp;</label>
                        <input type = "string"  name = "num1" id= "num1"  maxlength="10" class="input-alto" required>
                    </div>
                    <br>
                    <div class = "texto">
                        <label for = "num2">&emsp;&emsp; Codigo 2: &emsp;</label>
                        <input type = "string"  name = "num2" id= "num2"  maxlength="10" class="input-alto" required>
                    </div>
                    <br>
                    </div>
                </div>
            </main>
            <br><br>
            <button type = "submit" name = "calcular" style="width: 100px">Escanear</button>
        </form>
    </div>

    <?php
        echo "<br><div class= 'linea'></div>";
        echo "<br><div class='ex'>";
            if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["calcular"])){
                $p1 = $_POST['num1'];
                $p2 = $_POST['num2'];
                
            }
        echo "</div>";
    ?>
</body>
</html>