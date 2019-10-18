<?php

$error=1;
if(isset($_POST["go"]) and $_POST['go']==5){
	$e1=null;
	if (isset($_POST['LAST_NAME']) and $_POST['LAST_NAME']!=='') {$LAST_NAME=$_POST['LAST_NAME'];$error=0;} else {$error=1;}
	 if(preg_match('/(^[А-ЯЁ]{1}[а-яё\-]+$)/u', $LAST_NAME)) { /*Проверка на корректность фамилии*/
       $error=0;
        }
    else { $error=1;
        } 
    if ((isset($_POST['NAME'])) and ($_POST['NAME']!=='')) {$NAME=$_POST['NAME'];$error=0;} else {$error=1;}/*Проверка заполнения поля*/
    if(preg_match('/(^[А-ЯЁ]{1}[а-яё]+$)/u', $NAME)) { /*Проверка на корректность имени*/
       $error=0;
        }
    else { $error=1;
        }   
     if (isset($_POST['SEX']) and $_POST['SEX']!='') {$SEX=$_POST['SEX'];$myarray[3]=$obsh;} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_POST['BIRTH_DATE']) and $_POST['BIRTH_DATE']!='') {$BIRTH_DATE=$_POST['BIRTH_DATE'];$myarray[4]=$seriya;} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_POST['BIRTH_PLACE']) and $_POST['BIRTH_PLACE']!='') {$BIRTH_PLACE=$_POST['BIRTH_PLACE'];$myarray[5]=$nomer;} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_POST['CITIZENSHIP']) and $_POST['CITIZENSHIP']!='') {$CITIZENSHIP=$_POST['CITIZENSHIP'];$myarray[6]=$data;} else {$errno=1;}/*Проверка заполнения поля*/
if (isset($_POST['CITIZENSHIP_COUNTRY']) and $_POST['CITIZENSHIP_COUNTRY']!='') {$CITIZENSHIP_COUNTRY=$_POST['CITIZENSHIP_COUNTRY'];} else {$errno=1;}/*Проверка заполнения поля*/   
        
         
    if($error==1){
		$e1="Вы некорректно заполнили анкету";
        }    
    
         }
?>