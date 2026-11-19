<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gen.Clave</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <a href="gName.php" class="bt">Generador de Nombre</a>
        <a href="gClave.php" class="bt">Generador de Clave</a>
    </div>
    <h1>GENERADOR DE CLAVES</h1>
    <div class= contenedor>
        <center>
        <form method = "POST" action ="">
            <main class="todo">
                <div class="contenedor">
                    <br><br>
                    <div class = "texto">
                        <label for = "num1">&emsp; Nombre de usuario: &emsp;</label>
                        <input type = "text" pattern="[a-zA-Z]+" name = "num1" id= "num1" class="input-alto2" required>
                    </div>
                    <br>
                    <div class = "texto">
                        <label for = "num2">&emsp;&emsp; Fecha de Nacimiento: &emsp;</label>
                        <input type = "date"  min="1920-01-01" max="9999-12-31" name = "num2" id= "num2" class="input-alto2" required>
                    </div>
                    <br>
                    </div>
            </main>
            <br><br>
            <button class="btC" type = "submit" name = "calcular" style="width: 100px">Generar</button>
        </form>

    <?php
        require_once("funciones.php");
        echo "<br><div class= 'cnt2'>";
            if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["calcular"])){
                $p1 = $_POST['num1'];
                $p2 = $_POST['num2'];
                
                $y= generarClave($p1,$p2);
                echo "<h3>RESULTADO:</h3><br>".$y;
            }
        echo "</div>";
    ?>
    </div>
</body>
</html>