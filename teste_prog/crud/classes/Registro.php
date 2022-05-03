<?php
    $url = "http://localhost/teste_prog/crud/";
    $host="localhost";
    $name="teste800k";
    $usuario="root";
    $senha="0";
    $driver="mysql";
    $db=new PDO("$driver:host=$host;dbname=$name", $usuario, $senha);

    if(isset($_POST['registrar'])){
        try{

            $endereco = json_encode([
                'cep'       => $_POST['cep'],
                'estado'    => $_POST['estado'],
                'cidade'    => $_POST['cidade'],
                'logradouro'=> $_POST['logradouro'],
                'cep'       => $_POST['cep'],
            ]);

            $stmt = $db->prepare("INSERT INTO users VALUES(NULL,:name,:email,:endereco,:password)");
            $stmt->bindParam(':name', $_POST['name']);
            $stmt->bindParam(':email', $_POST['email']);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':password', password_hash($_POST['password'],PASSWORD_DEFAULT));
            $stmt->execute();
            header('Location: '.$url.'?p=registro&a=0');
        }catch(PDOException $e) {
            echo $e;
            header('Location: '.$url.'?p=registro&a=1');
        }
    }
?>
