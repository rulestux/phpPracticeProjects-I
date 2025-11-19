<?php

// MOCKING DE DADOS (técnica de teste com dados normalmente de bancos de dados
// inseridos no próprio arquivo de desenvolvimento):
$user = [
    'name' => 'Fel',
    'age' => '40',
    'occupation' => 'Software Developer'
];

if($user) {
    $name = $user['name'];
    $age = $user['age'];
    $occupation = $user['occupation'];
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
    <form action="">
        <div>
        <input type="text" name="name" placeholder="Enter your name:" value="<?= $name?>">
        </div>
         <div>
         <input type="text" name="age" placeholder="Enter your age:" value="<?= $age?>">
        </div>
         <div>
         <input type="text" name="occupation" placeholder="Enter your occupation:" value="<?= $occupation?>">
        </div>
         <div>
            <input type="submit" value="Send">
        </div>
 </form>
</body>
</html>
