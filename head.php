<?php
$arr = [['name'=>'Tut 1','url'=>'3456/basic.php'],
        ['name'=>'Tut 2','url'=>'inheritance/inherit.php']
        ];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP OOP Tutorial</title>
</head>
<body style="margin: 0;padding: 0">
<h1 style="text-align: center; padding: 20px 0">Tutorials</h1>
<nav>
    <ul style="list-style: none;display: flex;justify-content: space-around">
        <?php foreach ($arr as $a): ?>
        <li style="padding: 10px">
            <a style="text-decoration: none; font-size: 48px; color: #5a5454" href="<?php echo $a['url'] ?>"><?php echo $a['name']?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</nav>
