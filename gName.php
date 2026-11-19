<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gen.Name</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <a href="gName.php" class="bt">Generador de Nombre</a>
        <a href="gClave.php" class="bt">Generador de Clave</a>
    </div>
    <h1>GENERADOR DE NOMBRES</h1>
    <div class= contenedor>
        <center>
        <form method = "POST" action ="">
            <main class="todo">
                <div class="contenedo>
                    <div class = "texto">
                        <br><br>
                        <label for = "num1">&emsp; Nombre completo : &emsp;</label>
                        <input type = "text" name = "num1" id= "num1" class="input-largo" required>
                    </div>
                    <br>
                    <br>
                    <div class = "texto">
                        <label for = "num2">&emsp;&emsp; Institucion : &emsp;</label>
                        <input type = "text"  name = "num2" id= "num2" class="input-alto" required>
                        <label for = "num3">&emsp;&emsp; Año de ingreso: &emsp;</label>
                        <input type="number" min="1900" max="2026" maxlength="4"  name = "num3" id= "num3" class="input-alto" required>
                    </div>
                    <br>
                </div>
            </main>
            <br><br>
            <button class="btN" type = "submit" name = "calcular" style="width: 100px">Generar</button>
        </form>

    <?php
        require_once("funciones.php");
        echo "<br><div class= 'cnt'>";
            if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["calcular"])){
                $p1 = $_POST['num1'];
                $p2 = $_POST['num2'];
                $p3 = $_POST['num3'];
                $y=generarUsuario($p1,$p2,$p3); 
                echo "<h3>RESULTADO:</h3><br>".$y;
            }
            echo"</div>";
    ?>
    </div>
</body>
</html>