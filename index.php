<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Armotização</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap');

        *{
            margin: 0;
            padding: 0;
        }

        body{
            background-color: #ededeb;
            font-family: Roboto, Helvetica, sans-serif;
        }

        .container{
            margin: 0 auto;
            padding: 30px;
            width: 300px;
            height: 500px;
            text-align: center;
            padding-bottom: 15px;
        }

        label{
            font-size: 14px;            
            font-weight: bold;
            display: block;
            padding: 5px;
        }

        input[type=text], input[type=number]{
            padding: 4px;
            width: 300px;
            border: 1px solid #31ad99;
            outline: 0;
        }

        input[type=submit]{
            padding: 4px;
            width: 150px;
            height: 35px;
            background-color: #164d44;            
            color: #FFF;
            font-size: 16px;
            border: 1px solid #42e3c9;
        }

        input[type=submit]:hover{
            cursor: pointer;
            background-color: #206e61;
            font-weight: bold;            
        }

    </style>
</head>
<body>
    <div class="container">
        <form action="recebeDados.php" method="POST">
            <label for="saldoDevedor">Saldo Devedor:
                <input type="text" name="saldoDevedor" id="saldoDevedor" placeholder="Informe o saldo devedor" required>
            </label>
            

            <label for="taxa">Taxa:
                <input type="text" name="taxa" id="taxa" placeholder="Informe a Taxa" required>
            </label>
            

            <label for="parcelas">Parcelas:
                <input type="number" name="parcelas" id="parcelas" placeholder="Número de Parcelas" required>
            </label>

            <label>Tipo:
                <input type="radio" name="tipo" id="price" value="1" checked> Price
                <input type="radio" name="tipo" id="sac" value="2"> SAC
            </label>

            <label>
                <input type="submit" value="Enviar">
            </label>
            
        </form>
    </div>    
</body>
</html>