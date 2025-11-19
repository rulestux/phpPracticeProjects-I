<?php

    // criando variável como array para validações:
    $validations = [];

    // testando o conteúdo de '$_POST' com o método de comprimento de array
    // 'count()':
    if(count($_POST) > 0) {

        // caso NÃO exista conteúdo na posição associativa 'name':
        // 'if(!isset($$_POST['username']))'
        // ou caso a posição seja IDÊNTICA a nulo:
        if($_POST['username'] === "") {
            $validations[] = "Please, fill your Username.";
        }
        if($_POST['email'] === "") {
            $validations[] = "Please, fill your email.";
        }
        if($_POST['password'] === "") {
            $validations[] = "Please, enter password.";
        }
        if($_POST['confpassword'] === "") {
            $validations[] = "Please, confirm password.";
        }
        // testar se a confirmação da senha está conforme:
        if($_POST['password'] != $_POST['confpassword']) {
            $validations[] = "Password confirmation does not match. Check password.";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <?php if(count($validations)): ?>
        <ul>
            <?php foreach($validations as $validation): ?>
                <li><?= $validation ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="index.php" method="post">
        <div>
            <input type="text" name="username" placeholder="Enter your Username:">
        </div>
        <div>
            <input type="text" name="email" placeholder="Enter your email:">
        </div>
        <div>
            <input type="password" name="password" placeholder="Enter password:">
        </div>
        <div>
            <input type="password" name="confpassword" placeholder="Confirm password:">
        </div>
        <div>
            <input type="submit" value="Send">
        </div>

    </form>

</body>
</html>
