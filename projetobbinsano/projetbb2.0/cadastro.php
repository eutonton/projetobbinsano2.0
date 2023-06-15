<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="cadastro.css">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>CADASTRO</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<header>
            <div class="container1">
                <div class="logo"><img src="./logo.jpg"></div>
                <div class="menu">
                    <nav>
                        <a href="index.html">Home</a>
                        <a href="#equipe">Nossa equipe</a>
                        <a href="login.php">Login</a>
                        <a href="cadastro.php">Cadastro</a>
                        <a href="https://mail.google.com">encontreacademias@gmail.com</a>
                    </nav>
                </div>
        </header>
</head>

<body>
    <main id="container">
        <form action="insert.php" method="POST" id="login_form">
            <div id="form_header">
                <h1>Cadastro</h1>
                
            </div>

            <div id="inputs">
                <div class="input-box">
                    <label for="nome">
                        Nome
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="name" name="nome">
                        </div>
                    </label>
                </div>
                
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email">
                        </div>
                    </label>
                </div>
                
                <div class="input-box">
                    <label for="senha">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" id="password" name="password">
                        </div>
                    </label>
                </div>
            </div>
            <button type="submit" id="login_button">Cadastrar</button>

            <div id="login_redirect">
            <button type="button" id="login_redirect" onclick="redirecionar()">Já possui uma conta? Faça login!</button>
        </div>
            </form>

            <!-- <button type="submit" id="login_button">Cadastrar</button> -->

            <!-- <div id="login_redirect">
            <button onclick="redirecionar()">Já possui uma conta? Faça login!</button>
        </div> -->
    </main>

    <script>
        function redirecionar() {
            // Redireciona para a outra página
            window.location.href = 'login.php';
        }
    </script>
</body>
</html>
