<?php
//header("Content-Type: text/html; charset=utf-8");
//mb_internal_encoding("UTF-8");
$errno=0;
$myarray=array();
if (isset($_GET['LAST_NAME'])){$LAST_NAME=$_GET['LAST_NAME'];}
if (isset($_GET['NAME']) and $_GET['NAME']!='') {$NAME=$_GET['NAME'];$myarray[1]=$fam;} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['SECOND_NAME']) and $_GET['SECOND_NAME']!='') {$SECOND_NAME=$_GET['SECOND_NAME'];$myarray[2]=$imya;}  else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['SEX']) and $_GET['SEX']!='') {$SEX=$_GET['SEX'];$myarray[3]=$obsh;} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['BIRTH_DATE']) and $_GET['BIRTH_DATE']!='') {$BIRTH_DATE=$_GET['BIRTH_DATE'];$myarray[4]=$seriya;} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['BIRTH_PLACE']) and $_GET['BIRTH_PLACE']!='') {$BIRTH_PLACE=$_GET['BIRTH_PLACE'];$myarray[5]=$nomer;} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['CITIZENSHIP']) and $_GET['CITIZENSHIP']!='') {$CITIZENSHIP=$_GET['CITIZENSHIP'];$myarray[6]=$data;} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['CITIZENSHIP_COUNTRY']) and $_GET['CITIZENSHIP_COUNTRY']!='') {$CITIZENSHIP_COUNTRY=$_GET['CITIZENSHIP_COUNTRY'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['DOCUMENT_VIEW']) and $_GET['DOCUMENT_VIEW']!='') {$DOCUMENT_VIEW=$_GET['DOCUMENT_VIEW'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['DOCUMENT_SERIE']) and $_GET['DOCUMENT_SERIE']!='') {$DOCUMENT_SERIE=$_GET['DOCUMENT_SERIE'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['DOCUMENT_NUMBER']) and $_GET['DOCUMENT_NUMBER']!='') {$DOCUMENT_NUMBER=$_GET['DOCUMENT_NUMBER'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['DOCUMENT_DATE']) and $_GET['DOCUMENT_DATE']!='') {$DOCUMENT_DATE=$_GET['DOCUMENT_DATE'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['DOCUMENT_PLACE']) and $_GET['DOCUMENT_PLACE']!='') {$DOCUMENT_PLACE=$_GET['DOCUMENT_PLACE'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['PASSPORT_ADDRESS_COUNTRY']) and $_GET['PASSPORT_ADDRESS_COUNTRY']!='') {$PASSPORT_ADDRESS_COUNTRY=$_GET['PASSPORT_ADDRESS_COUNTRY'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['PASSPORT_ADDRESS_NAME_COUNTRY']) and $_GET['PASSPORT_ADDRESS_NAME_COUNTRY']!='') {$PASSPORT_ADDRESS_NAME_COUNTRY=$_GET['PASSPORT_ADDRESS_NAME_COUNTRY'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['PASSPORT_ADDRESS_PLACE']) and $_GET['PASSPORT_ADDRESS_PLACE']!='') {$PASSPORT_ADDRESS_PLACE=$_GET['PASSPORT_ADDRESS_PLACE'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['PASSPORT_ADDRESS_STREET']) and $_GET['PASSPORT_ADDRESS_STREET']!='') {$PASSPORT_ADDRESS_STREET=$_GET['PASSPORT_ADDRESS_STREET'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['PASSPORT_ADDRESS_HOUSE_NUMBER']) and $_GET['PASSPORT_ADDRESS_HOUSE_NUMBER']!='') {$PASSPORT_ADDRESS_HOUSE_NUMBER=$_GET['PASSPORT_ADDRESS_HOUSE_NUMBER'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['PASSPORT_ADDRESS_HOUSING']) and $_GET['PASSPORT_ADDRESS_HOUSING']!='') {$PASSPORT_ADDRESS_HOUSING=$_GET['PASSPORT_ADDRESS_HOUSING'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['PASSPORT_ADDRESS_FLAT']) and $_GET['PASSPORT_ADDRESS_FLAT']!='') {$PASSPORT_ADDRESS_FLAT=$_GET['PASSPORT_ADDRESS_FLAT'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['PASSPORT_ADDRESS_INDEX']) and $_GET['PASSPORT_ADDRESS_INDEX']!='') {$PASSPORT_ADDRESS_INDEX=$_GET['PASSPORT_ADDRESS_INDEX'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['FACT_ADDRESS_COUNTRY']) and $_GET['FACT_ADDRESS_COUNTRY']!='') {$FACT_ADDRESS_COUNTRY=$_GET['FACT_ADDRESS_COUNTRY'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['FACT_ADDRESS_NAME_COUNTRY']) and $_GET['FACT_ADDRESS_NAME_COUNTRY']!='') {$FACT_ADDRESS_NAME_COUNTRY=$_GET['FACT_ADDRESS_NAME_COUNTRY'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['FACT_ADDRESS_PLACE']) and $_GET['FACT_ADDRESS_PLACE']!='') {$FACT_ADDRESS_PLACE=$_GET['FACT_ADDRESS_PLACE'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['FACT_ADDRESS_STREET']) and $_GET['FACT_ADDRESS_STREET']!='') {$FACT_ADDRESS_STREET=$_GET['FACT_ADDRESS_STREET'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['FACT_ADDRESS_HOUSE_NUMBER']) and $_GET['FACT_ADDRESS_HOUSE_NUMBER']!='') {$FACT_ADDRESS_HOUSE_NUMBER=$_GET['FACT_ADDRESS_HOUSE_NUMBER'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['FACT_ADDRESS_HOUSING']) and $_GET['FACT_ADDRESS_HOUSING']!='') {$FACT_ADDRESS_HOUSING=$_GET['FACT_ADDRESS_HOUSING'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['FACT_ADDRESS_FLAT']) and $_GET['FACT_ADDRESS_FLAT']!='') {$FACT_ADDRESS_FLAT=$_GET['FACT_ADDRESS_FLAT'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['FACT_ADDRESS_INDEX']) and $_GET['FACT_ADDRESS_INDEX']!='') {$FACT_ADDRESS_INDEX=$_GET['FACT_ADDRESS_INDEX'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['EDUCATIONAL_INSTITUTION_TYPE']) and $_GET['EDUCATIONAL_INSTITUTION_TYPE']!='') {$EDUCATIONAL_INSTITUTION_TYPE=$_GET['EDUCATIONAL_INSTITUTION_TYPE'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['EDUCATIONAL_INSTITUTION_COUNTRY']) and $_GET['EDUCATIONAL_INSTITUTION_COUNTRY']!='') {$EDUCATIONAL_INSTITUTION_COUNTRY=$_GET['EDUCATIONAL_INSTITUTION_COUNTRY'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['EDUCATIONAL_INSTITUTION_NAME_COUNTRY']) and $_GET['EDUCATIONAL_INSTITUTION_NAME_COUNTRY']!='') {$EDUCATIONAL_INSTITUTION_NAME_COUNTRY=$_GET['EDUCATIONAL_INSTITUTION_NAME_COUNTRY'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['EDUCATIONAL_INSTITUTION_PLACE']) and $_GET['EDUCATIONAL_INSTITUTION_PLACE']!='') {$EDUCATIONAL_INSTITUTION_PLACE=$_GET['EDUCATIONAL_INSTITUTION_PLACE'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['EDUCATIONAL_INSTITUTION_NAME']) and $_GET['EDUCATIONAL_INSTITUTION_NAME']!='') {$EDUCATIONAL_INSTITUTION_NAME=$_GET['EDUCATIONAL_INSTITUTION_NAME'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['EDUCATIONAL_INSTITUTION_YEAR_END']) and $_GET['EDUCATIONAL_INSTITUTION_YEAR_END']!='') {$EDUCATIONAL_INSTITUTION_YEAR_END=$_GET['EDUCATIONAL_INSTITUTION_YEAR_END'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['PROGRAM_TYPE']) and $_GET['PROGRAM_TYPE']!='') {$PROGRAM_TYPE=$_GET['PROGRAM_TYPE'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['PROGRAM']) and $_GET['PROGRAM']!='') {$PROGRAM=$_GET['PROGRAM'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['FACULTY']) and $_GET['FACULTY']!='') {$FACULTY=$_GET['FACULTY'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['QUALIFICATION']) and $_GET['QUALIFICATION']!='') {$QUALIFICATION=$_GET['QUALIFICATION'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['PROFILE']) and $_GET['PROFILE']!='') {$PROFILE=$_GET['PROFILE'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['STUDY_FORM']) and $_GET['STUDY_FORM']!='') {$STUDY_FORM=$_GET['STUDY_FORM'];} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_GET['FINANCING_SOURCES']) and $_GET['FINANCING_SOURCES']!='') {$FINANCING_SOURCES=$_GET['FINANCING_SOURCES'];} else {$errno=1;}/*Проверка заполнения поля*/

include_once('function.php');
$result=add_abitur($LAST_NAME,$NAME,$SECOND_NAME,$SEX,$BIRTH_DATE,$BIRTH_PLACE,$CITIZENSHIP,$CITIZENSHIP_COUNTRY,$DOCUMENT_VIEW,$DOCUMENT_SERIE,$DOCUMENT_NUMBER,$DOCUMENT_DATE,$DOCUMENT_PLACE,$PASSPORT_ADDRESS_COUNTRY,$PASSPORT_ADDRESS_NAME_COUNTRY,$PASSPORT_ADDRESS_PLACE,$PASSPORT_ADDRESS_STREET,$PASSPORT_ADDRESS_HOUSE_NUMBER,$PASSPORT_ADDRESS_HOUSING,$PASSPORT_ADDRESS_FLAT,$PASSPORT_ADDRESS_INDEX,$FACT_ADDRESS_COUNTRY,$FACT_ADDRESS_PLACE,$FACT_ADDRESS_HOUSE_NUMBER,$FACT_ADDRESS_HOUSING,$FACT_ADDRESS_FLAT,$FACT_ADDRESS_INDEX,$EDUCATIONAL_INSTITUTION_TYPE,$EDUCATIONAL_INSTITUTION_COUNTRY,$EDUCATIONAL_INSTITUTION_NAME_COUNTRY,$EDUCATIONAL_INSTITUTION_PLACE,$EDUCATIONAL_INSTITUTION_NAME,$EDUCATIONAL_INSTITUTION_YEAR_END);
if ($result == 'true') {echo "<p>Абитуриент успешно добален!</p>";}
$result=applicant_id($LAST_NAME,$NAME,$SEX); // получаем пароль по логину
$numresult= $result->num_rows;  // кол-во листов
if ($numresult=='1') {
$row=$result->fetch_assoc();}  // преобразуем в ассоц массив
$APPLICANT_ID=$row['APPLICANT_ID'];
$result=add_abitur_profile($APPLICANT_ID,$PROGRAM_TYPE,$PROGRAM,$FACULTY,$QUALIFICATION,$PROFILE,$STUDY_FORM,$FINANCING_SOURCES);
if ($result == 'true') {echo "<p>Профиль абитуриента успешно добален!</p>";}
if(preg_match('/(^[а-яёА-ЯЁ]+$)/', $fam)) { /*Проверка на корректность фамилии*/
  $err_f= "Фамилия введена верно";
}
else { echo "Фамилия введена не верно";}    /*Проверка на корректность имени*/
if(preg_match('/(^[а-яёА-ЯЁ]+$)/', $imya)) {
  $err_f= "Имя введено верно";
}
else { echo "Имя введено не верно";}
if(preg_match('/^([0-9]{2})-([0-9]{2})-([0-9]{4})$/', $data)) { /*проверка на корректность даты*/
  $err_f= "Дата введена верно";
}
else { echo "Дата введена не верно";}
echo "<script>location.href='index.php?errno=$errno&rersult=1'</script>";  // переадресация
//echo "<script>location.href='index.php'</script>";  // переадресация
?>
