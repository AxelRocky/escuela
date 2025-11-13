<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pantalla de inicio de sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        table {
            background: white;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        td {
            padding: 8px;
        }
        input[type=text], input[type=password] {
            width: 200px;
            padding: 5px;
        }
        input[type=submit] {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type=submit]:hover {
            background: #45a049;
        }
    </style>
</head>
<body>
    <form action="/login/autenticar" method="POST">
        <table>
            <tr>
                <td>Usuario:</td>
                <td><input type="text" name="usuario" required></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><input type="password" name="clave" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Entrar"></td>
            </tr>
        </table>
    </form>
</body>
</html>
