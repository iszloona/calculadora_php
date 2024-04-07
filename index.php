    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>calculadora php</title>
    </head>
    <body>
        <h1>projeto calculadora</h1>
        <form method= "post" action="calculos.php">
            valor 1: <input type= "text"  name= "valor1"><br>
            valor 2:  <input type= "number"  name= "valor2"><br>
            <br>
            <select name= "operacao">
                    <option> soma </option>
                    <option> subtração </option>
                    <option> multiplicação</option>
                    <option> divisão</option>
</select>
<br> <input type= "submit" value= "calcular">
</form>
    </body>
    </html>