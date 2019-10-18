<!DOCTYPE HTML>
<html>
<head>
	<title>Неназванный 2</title>
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
            <div class="top-logo"> <a href="index.php">Анкета</a> |  <?php if (isset($_GET['result'])) {echo "<strong style='text-color: green;'>Ваша анкета успешно отправлена в приёмную комиссию</srong>";} ?></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="container">
        <form action="view.php" method="GET" enctype="text/plain">
<select size="1" name="country" id="country" onchange="submit()">
<option value="0">---Выберите страну---</option>
<option value="1">Россия</option>
</select>
</form>
<?php 
    include_once ('function.php');
    if (isset($_GET['country'])) {$country=$_GET['country'];
    echo $country;
    $result=applicant($country); // получаем пароль по логину
    $numresult= $result->num_rows;  // кол-во листов
    $row=$result->fetch_assoc();
    $x=1;
    while ($x<=$numresult) {
        $FACT_ADDRESS_COUNTRY=$row['FACT_ADDRESS_COUNTRY'];
        $resultc=country_id($FACT_ADDRESS_COUNTRY); // получаем пароль по логину
    $numresultc= $resultc->num_rows;  // кол-во листов
    $row_c=$resultc->fetch_assoc();
    echo $row['APPLICANT_ID'],' ',$row['FACT_ADDRESS_COUNTRY'],' ',$row_c['name'],' ',$row['LAST_NAME'],
    '<select size="1">
        <option value="1" name="LANGUAGE">Русский язык</option>
    </select>',
    '<br/>';
    $x++;
    }
    }
?>

        </div>
        </div>
    </div>



</body>
</html>