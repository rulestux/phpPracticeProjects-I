<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post">
        <div>
            <input type="text" name="brand" placeholder="Car brand">
        </div>
        <div>
            <input type="text" name="price" placeholder="Car price">
        </div>
        <div>
            <input type="checkbox" name="optionals[]" value="Sunroof"> Sunroof
        </div>
        <div>
            <input type="checkbox" name="optionals[]" value="Power steering"> Power steering
        </div>
        <div>
            <input type="checkbox" name="optionals[]" value="Armor"> Armor
        </div>

        <div>
            <input type="submit" value="Send">
        </div>
    </form>
</body>
</html>
