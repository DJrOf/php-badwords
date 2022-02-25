<?php

$string = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
Laborum animi itaque maiores quia minima dicta. 
Aperiam quas eaque quia qui non reiciendis sapiente iusto similique repellendus, sint magni sunt? Maiores!';

$trimmed = trim($string);

$word = $_GET ? $_GET['badword'] : '';

$new_string = str_Replace($word, '***', $string);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p>  Text: <?php  echo $trimmed;?> </p>
<span> Lenght: <?php echo strlen($trimmed); ?> </span>

    <form action="index.php" method="GET">
        <input type="text" name = 'badword'>
        <button type="submit">Invia</button>
    </form>

        <!-- tag br usato per convenzione -->
    <p>
    <?php  echo $new_string; ?> <br> 
    </p>
    <span> Lenght: <?php echo strlen($new_string); ?> </span>
</body>
</html>