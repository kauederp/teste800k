<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container-fluid m-0 p-0">
    <header>
        <nav class="d-flex p-4 bg-dark text-light">
            <div class="col-11"><p class="fw-bold">Gerenciador de <b class="text-primary">usuários</b></p></div>
            <div><a class="btn btn-light"   href="?p=registro">register</a></div>
        </nav>
    </header>
    <?php
        if (isset($_GET['a'])) {
            switch ($_GET['a']) {
                case 0:
                    echo "<p id='alert' class='alert-success'>Logado.</p>";
                    break;
                case 1:
                    echo "<p id='alert' class='alert-danger'>Usuário não existe.</p>";
                    break;
                default:
                    echo "<p id='alert' class='alert-danger'>Ocorreu um erro inesperado.</p>";
                    break;
            }
        }
    ?>
    <div class="d-flex justify-content-center">
        <form class="mt-5 bg-light col-6 p-3" action="classes/Login.php" method="post">
            <h3>Login</h3>
            <label for="email">
                Email: 
            </label><input class="form-control" type="email" name="email" id="email">
            <label for="password">
                Senha:
            </label><input class="form-control" type="password" name="password" id="password">
            
            <div class="d-flex justify-content-end "><input class="mt-2 btn btn-primary" name="logar" type="submit" value="Logar"></div>
        </form>
    </div>
    <script>
        setTimeout(()=>{
            let alert = document.getElementById('alert')
            alert.remove();
        },2000)
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>