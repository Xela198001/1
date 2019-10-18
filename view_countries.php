<!DOCTYPE HTML>
<html>
<head>
	<title>Просмотр стран</title>
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
            <div class="top-logo"><?php include('nav.php') ?>
              <?php if (isset($_GET['result'])) {echo "<strong style='text-color: green;'>Ваша анкета успешно отправлена в приёмную комиссию</srong>";} ?></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="container">
    <h1>
        Просмотр стран
    </h1>
        <?php 
    include_once ('function.php');
    $result=view_country(); // получаем пароль по логину
    $numresult= $result->num_rows;  // кол-во листов
    echo "<table><th>№</th><th>Страна</th>";
    for ($x=1; $x<=$numresult; $x++) {
    $row=$result->fetch_assoc();
    echo '<tr><td>',$row['country_id'],'</td><td>',$row['name'],'</td></tr>';
    }
    echo "</table>"
?>
        </div>
    <div class="info">
        </div>
    </div>
</body>
</html>