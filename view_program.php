<!DOCTYPE HTML>
<html>
<head>
	<title>Просмотр добавление направлений/специальности</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="top-nav">
        <div class="topnav-wrapper">
            <div class="topnav-right">
                <ul class="right-menu">
                    <li><p>Лабораторная работа №8</p></li></a></li>
                </ul>
            </div>
            <div class="top-logo"> <?php include('nav.php') ?>
            <?php if (isset($_GET['result'])) {echo "<strong style='text-color: green;'>Ваша анкета успешно отправлена в приёмную комиссию</srong>";} ?></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="container">
    <h1>
        Просмотр добавление направлений/специальности
    </h1>
<?php 
    include_once ('function.php');
    $result=view_program(); // получаем пароль по логину
    $numresult= $result->num_rows;  // кол-во листов
    $x=1;
    echo "<table><th>№</th><th>Направление</th>";
    while ($x<=$numresult) {
        $row=$result->fetch_assoc();
    echo '<tr><td>',$row['program_id'],'</td><td>',$row['name'],'</td></tr>';
    $x++;
    }
    echo "</table>"
?>
        </div>
        </div>
    </div>
<div class="info">
        </div>
    </div>
</body>
</html>