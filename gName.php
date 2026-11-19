<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="gName.php">Generador de Nombre</a>
    <a href="gClave.php">Generador de Clave</a>
    <h1>GENERADOR DE NOMBRES</h1>
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
        }</style>
        <form method = "POST" action ="">
            <main class="todo">
                <div class="contenedor">
                    <div class = "texto">
                        <label for = "num1">&emsp;&emsp; Nombre completo : &emsp;</label>
                        <input type = "text" name = "num1" id= "num1" class="input-alto" required>
                    </div>
                    <br>
                    <div class = "texto">
                        <label for = "num2">&emsp;&emsp; Institucion : &emsp;</label>
                        <input type = "text"  name = "num2" id= "num2" class="input-alto" required>
                    </div>
                    <br>
                    <div class = "texto">
                        <label for = "num3">&emsp;&emsp; Año de ingreso: &emsp;</label>
                        <input type="number" min="1900" max="2026"  name = "num3" id= "num3" class="input-alto" required>
                    </div>
                    <br>
                </div>
            </main>
            <br><br>
            <button type = "submit" name = "calcular" style="width: 100px">Generar</button>
        </form>

    <?php
        require_once("funciones.php");
        echo "<br><div class= 'linea'></div>";
            if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["calcular"])){
                $p1 = $_POST['num1'];
                $p2 = $_POST['num2'];
                $p3 = $_POST['num3'];
                $y=generarUsuario($p1,$p2,$p3); 
                echo $y;
            }

    ?>
    </div>
</body>
</html>