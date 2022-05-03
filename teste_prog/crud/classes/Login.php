<?php
    $url = "http://localhost/teste_prog/crud/";
    $host="localhost";
    $name="teste800k";
    $usuario="root";
    $senha="0";
    $driver="mysql";
    $db=new PDO("$driver:host=$host;dbname=$name", $usuario, $senha);

    if(isset($_POST['logar'])){
        try{
            $stmt = $db->prepare("SELECT name, email, password FROM users where email = :email");
            $stmt->bindValue(':email', $_POST['email']);
            $stmt->execute();
            $linha = $stmt->fetch(PDO::FETCH_ASSOC);
            if($linha){
                if(password_verify($_POST['password'], $linha['password']))
                    setcookie('user', 'logado', time() + (86400 * 30), "/");
                header('Location: '.$url.'?p=login&a=0');
            }else{
                header('Location: '.$url.'?p=login&a=1');
            }

            
        }catch(PDOException $e) {
            header('Location: '.$url.'?p=login&a=2');
        }
    }
?>