<?php
// programa para armazenar dados em uma requisição 'POST'.
// variável para manter o conteúdo da variável de ambiente '$_SERVER',
// filtrando pelo método de requisição:
    $method = $_SERVER['REQUEST_METHOD'];

// testando se a variável '$_POST' tem conteúdo:
    if(isset($_POST['name'])) {
        $name = $_POST['name'];
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
<?php
// testando se o método de requisição é 'GET', para alterar para 'POST':
    if($method == "GET"):
?>
    <form action="index.php" method="post">
        <div>
            <input type="text" name="name" placeholder="Enter your name."
        </div>
        <div>
            <input type="submit" value="Send">
        </div>
    </form>
<?php
    else:
?>
    <h1>Your name is <?= $name ?></h1>
<?php
    endif;
?>
</body>
</html>
