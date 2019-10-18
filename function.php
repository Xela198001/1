<?php 

function dbconnect() // функция подключения к бд
{ 
	$dblocation = "localhost"; // Имя сервера
	$dbuser = "root";          // Имя пользователя
	$dbpasswd = "";   // пароль
	$db_name = "applicants"; // имя базы данных
	$db = new mysqli($dblocation , $dbuser, $dbpasswd, $db_name);  // подключаем базу
	if (mysqli_connect_errno()){ // если есть ошибки
	 $error=mysqli_connect_error();  // получаем ошибку
	 $errorno=mysqli_connect_errno(); // номер ошибки
	 exit ("<p>Подключение невозможно: $errorno - $error<p>"); //выводим ошибку а завершаем 
	 }
	else // иначе
	 { 
	 return $db;  // возвращаем подключение
	 } 
}  
function add_abitur($LAST_NAME,$NAME,$SECOND_NAME,$SEX,$BIRTH_DATE,$BIRTH_PLACE,$CITIZENSHIP,$CITIZENSHIP_COUNTRY,$DOCUMENT_VIEW,$DOCUMENT_SERIE,$DOCUMENT_NUMBER,$DOCUMENT_DATE,$DOCUMENT_PLACE,$PASSPORT_ADDRESS_COUNTRY,$PASSPORT_ADDRESS_NAME_COUNTRY,$PASSPORT_ADDRESS_PLACE,$PASSPORT_ADDRESS_STREET,$PASSPORT_ADDRESS_HOUSE_NUMBER,$PASSPORT_ADDRESS_HOUSING,$PASSPORT_ADDRESS_FLAT,$PASSPORT_ADDRESS_INDEX,$FACT_ADDRESS_COUNTRY,$FACT_ADDRESS_PLACE,$FACT_ADDRESS_HOUSE_NUMBER,$FACT_ADDRESS_HOUSING,$FACT_ADDRESS_FLAT,$FACT_ADDRESS_INDEX,$EDUCATIONAL_INSTITUTION_TYPE,$EDUCATIONAL_INSTITUTION_COUNTRY,$EDUCATIONAL_INSTITUTION_NAME_COUNTRY,$EDUCATIONAL_INSTITUTION_PLACE,$EDUCATIONAL_INSTITUTION_NAME,$EDUCATIONAL_INSTITUTION_YEAR_END)  // функция записи данных абиуриента в таблицу applicants]
{
	$query = 
 "INSERT INTO applicants (LAST_NAME,NAME,SECOND_NAME,SEX,BIRTH_DATE,BIRTH_PLACE,CITIZENSHIP,CITIZENSHIP_COUNTRY,DOCUMENT_VIEW,DOCUMENT_SERIE,DOCUMENT_NUMBER,DOCUMENT_DATE,DOCUMENT_PLACE,PASSPORT_ADDRESS_COUNTRY,PASSPORT_ADDRESS_NAME_COUNTRY,PASSPORT_ADDRESS_PLACE,PASSPORT_ADDRESS_STREET,PASSPORT_ADDRESS_HOUSE_NUMBER,PASSPORT_ADDRESS_HOUSING,PASSPORT_ADDRESS_FLAT,PASSPORT_ADDRESS_INDEX,FACT_ADDRESS_COUNTRY,FACT_ADDRESS_PLACE,FACT_ADDRESS_HOUSE_NUMBER,FACT_ADDRESS_HOUSING,FACT_ADDRESS_FLAT,FACT_ADDRESS_INDEX,EDUCATIONAL_INSTITUTION_TYPE,EDUCATIONAL_INSTITUTION_COUNTRY,EDUCATIONAL_INSTITUTION_NAME_COUNTRY,EDUCATIONAL_INSTITUTION_PLACE,EDUCATIONAL_INSTITUTION_NAME,EDUCATIONAL_INSTITUTION_YEAR_END)
 VALUES ('$LAST_NAME','$NAME','$SECOND_NAME','$SEX','$BIRTH_DATE','$BIRTH_PLACE','$CITIZENSHIP','$CITIZENSHIP_COUNTRY','$DOCUMENT_VIEW','$DOCUMENT_SERIE','$DOCUMENT_NUMBER','$DOCUMENT_DATE','$DOCUMENT_PLACE','$PASSPORT_ADDRESS_COUNTRY','$PASSPORT_ADDRESS_NAME_COUNTRY','$PASSPORT_ADDRESS_PLACE','$PASSPORT_ADDRESS_STREET','$PASSPORT_ADDRESS_HOUSE_NUMBER','$PASSPORT_ADDRESS_HOUSING','$PASSPORT_ADDRESS_FLAT','$PASSPORT_ADDRESS_INDEX','$FACT_ADDRESS_COUNTRY','$FACT_ADDRESS_PLACE','$FACT_ADDRESS_HOUSE_NUMBER','$FACT_ADDRESS_HOUSING','$FACT_ADDRESS_FLAT','$FACT_ADDRESS_INDEX','$EDUCATIONAL_INSTITUTION_TYPE','$EDUCATIONAL_INSTITUTION_COUNTRY','$EDUCATIONAL_INSTITUTION_NAME_COUNTRY','$EDUCATIONAL_INSTITUTION_PLACE','$EDUCATIONAL_INSTITUTION_NAME','$EDUCATIONAL_INSTITUTION_YEAR_EN')";//запрос
 $handle=dbconnect();  // подключение к бд
 $result = $handle->query($query);  // отправляем запрос
 return $result;  // возвращаем данные 
} 
function add_abitur_profile($APPLICANT_ID,$PROGRAM_TYPE,$PROGRAM,$FACULTY,$QUALIFICATION,$PROFILE,$STUDY_FORM,$FINANCING_SOURCES)  // функция записи данных профиля абиуриента в таблицу applicant_programs
{
	$query = 
 "INSERT INTO applicant_programs (APPLICANT_ID,PROGRAM_TYPE,PROGRAM,FACULTY,QUALIFICATION,PROFILE,STUDY_FORM,FINANCING_SOURCES)
 VALUES ('$APPLICANT_ID','$PROGRAM_TYPE','$PROGRAM','$FACULTY','$QUALIFICATION','$PROFILE','$STUDY_FORM','$FINANCING_SOURCES')";//запрос
 $handle=dbconnect();  // подключение к бд
 $result = $handle->query($query);  // отправляем запрос
 return $result;  // возвращаем данные 
} 
function applicant_id($LAST_NAME,$NAME,$SEX)  // функция получения информацию об абитуриенте
{
	$query = 
	"SELECT APPLICANT_ID
	FROM applicants
	WHERE LAST_NAME='$LAST_NAME' AND NAME='$NAME' AND SEX='$SEX'"; // запрос
   // $errordb=mysql_error();
	$handle=dbconnect();  //подключение
 $result3 = $handle->query($query);  // отправляем запрос
 
 return $result3;  // возвращаем 
} 
function applicant($country)  // функция получения информацию об абитуриенте
{
	$query = 
	"SELECT APPLICANT_ID,FACT_ADDRESS_COUNTRY,LAST_NAME
	FROM applicants
    WHERE FACT_ADDRESS_COUNTRY='$country'
	"; // запрос
   // $errordb=mysql_error();
	$handle=dbconnect();  //подключение
 $result = $handle->query($query);  // отправляем запрос
 
 return $result;  // возвращаем 
} 
function view_country()  // функция получения информацию об абитуриенте
{
	$query = 
	"SELECT country_id,name
	FROM countries
    "; // запрос
   // $errordb=mysql_error();
	$handle=dbconnect();  //подключение
 $result = $handle->query($query);  // отправляем запрос
 return $result;  // возвращаем 
} 
function language_id($APPLICANT_ID)  // функция получения информацию об абитуриенте
{
	$query_fl = 
	"SELECT *
	FROM applicant_foreign_languages
    WHERE applicant_id='$applicant_id'"; // запрос
   // $errordb=mysql_error();
	$handle=dbconnect();  //подключение
 $result_fl = $handle->query($query_fl);  // отправляем запрос
 
 return $result_fl;  // возвращаем 
} 
function view_program()  // функция получения информацию об абитуриенте
{
	$query = 
	"SELECT program_id,name
	FROM programs"; // запрос
   // $errordb=mysql_error();
	$handle=dbconnect();  //подключение
 $result = $handle->query($query);  // отправляем запрос
 
 return $result;  // возвращаем 
} 
function view_faculty()  // функция получения информацию об абитуриенте
{
	$query = 
	"SELECT *
	FROM faculties"; // запрос
   // $errordb=mysql_error();
	$handle=dbconnect();  //подключение
 $result = $handle->query($query);  // отправляем запрос
 
 return $result;  // возвращаем 
} 
/*------------------------------------------------------------------------------------*/
function per($id_per)  // функция получения информацию о студенте по логину
{
	$query = 
	"SELECT permission.*
	FROM permission
	WHERE id='$id_per'"; // запрос
   // $errordb=mysql_error();
	$handle=dbconnect();  //подключение
 $result3 = $handle->query($query);  // отправляем запрос
 
 return $result3;  // возвращаем 
} 

function login_t($login)  // функция получения информацию  по логину
{
	$query = 
	"SELECT users.*
	FROM users
	WHERE login='$login'"; // запрос
	$handle=dbconnect();  //подключение
 $result = $handle->query($query);  // отправляем запрос
 return $result;  // возвращаем 
} 
function add_questionnaire($questionnaire,$kol) // функция добавления темы занятия
{ 
 $query = 
 "INSERT INTO questionnaire (name,kolq)
 VALUES ('$questionnaire','$kol')";//запрос
 $handle=dbconnect();  // подключение к бд
 $result1 = $handle->query($query);  // отправляем запрос
 return $result1;  // возвращаем данные
} 

function id_questionnaire($questionnaire,$kol)  // функция получения информацию о преподавателе по логину
{
	$query = 
	"SELECT id
	FROM questionnaire
	WHERE name='$questionnaire'"; // запрос
	$handle=dbconnect();  //подключение
 $result = $handle->query($query);  // отправляем запрос
 return $result;  // возвращаем 
} 
function list_questionnaire()  // функция получения информацию о преподавателе по логину
{
	$query = 
	"SELECT id,name,kolq
	FROM questionnaire
    "; // запрос
	$handle=dbconnect();  //подключение
 $result = $handle->query($query);  // отправляем запрос
 return $result;  // возвращаем 
 }
 function questionnaire()  // функция получения информацию о преподавателе по логину
{
	$query = 
	"SELECT name,kolq
	FROM questionnaire
    "; // запрос
	$handle=dbconnect();  //подключение
 $result = $handle->query($query);  // отправляем запрос
 return $result;  // возвращаем 
 }
  function answer_q($id_q)  // функция получения информацию о преподавателе по логину
{
	$query = 
	"SELECT *
	FROM question
    WHERE id_q='$id_q'
    "; // запрос
	$handle=dbconnect();  //подключение
 $result = $handle->query($query);  // отправляем запрос
 return $result;  // возвращаем 
 }
 function add_question($id_q,$n,$text) // функция добавления темы занятия
{ 
 $query = 
 "INSERT INTO question (id_q,id_n,text)
 VALUES ('$id_q','$n','$text')";//запрос
 $handle=dbconnect();  // подключение к бд
 $result1 = $handle->query($query);  // отправляем запрос
 return $result1;  // возвращаем данные
} 
function add_user($login,$password,$fam,$imya,$otch,$email) // функция добавления темы занятия
{ 
 $query = 
 "INSERT INTO users (id_per,login,password,fam,imya,otch,email)
 VALUES ('1','$login','$password','$fam','$imya','$otch','$email')";//запрос
 $handle=dbconnect();  // подключение к бд
 $result1 = $handle->query($query);  // отправляем запрос
 return $result1;  // возвращаем данные
} 
 ?>