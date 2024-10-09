<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            width: 150%;
            height: 600px;
            position: relative;
            display: flex;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border-radius: 20px;
        }

        .left {
            background-color: white;
            padding: 60px;
            width: 150%;
            display: flex;
            flex-direction: column;
            justify-content: center;
               }
   
        .right {
            background-color: #000;
            color: white;
            padding: 60px; /* Aumentar padding */
            width: 150%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            clip-path: polygon(100% 0, 100% 100%, 50% 100%, 0 0);
            border-radius: 0 20px 20px 0;
        }

        .left h2 {
            margin-bottom: 30px;
            font-size: 32px;
        }
        .input-field {
            margin-bottom: 30px;
        }
        .input-field label {
            font-size: 18px;
            color: #333;
        }
        .input-field input {
            width: 100%;
            padding: 15px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }
        .login-button {
            width: 100%;
            padding: 15px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
        }
        .login-button:hover {
            background-color: #333;
        }
        .sign-up {
            margin-top: 20px;
            font-size: 16px;
        }
        .sign-up a {
            color: blue;
            text-decoration: none;
        }
        
    </style>
</head>
<body>

    <div class="container">
        <div class="left">
            <h2>Login</h2>
            <div class="input-field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username">
            </div>
            <div class="input-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            <button class="login-button">Login</button>
            <div class="sign-up">
                <span>Don't have an account? </span><a href="registro.php">Sign Up</a>
            </div>
        </div>
        
    </div>

</body>
</html>
