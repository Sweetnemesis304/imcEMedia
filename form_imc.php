<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario IMC</title>
</head>
<body>
    <h2> Calculo de IMC<h2>
    <form action = "prog.php"  method="GET">
        <label id = "peso">Insira o seu peso em KG:</label>
        <input  name= "peso" > 
        <br>
        <label id = "altura"> Insira a sua altura em M:</label>
        <input name= "altura">
        <br> 
        <input type= "submit" name= "enviar" placeholder="Enviar">
    </form> 
</body>
</html>