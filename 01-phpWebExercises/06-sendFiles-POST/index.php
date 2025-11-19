<?php

// testando a variável de ambiente '$_FILES':
if(isset($_FILES)) {
    print_r($_FILES);
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
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="file" name="file">
        </div>
        <input type="submit" value="Send">
    </form>
</body>
</html>
