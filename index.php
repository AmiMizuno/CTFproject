<html>
<body bgcolor="#d8ebff">
<p><center><img src="1.png" alt="mikky"></center></p>
<font color="#ef6900"><p><center><h1>PROJECT</h1></center></p></font>

 <p><center><form name="forma1">

     <input type="text" name="LOGIN" size="20"
            maxlength="40" value="	LOGIN">
<input type="text" name="PAROL" size="20"
            maxlength="40" value="	PAROL">
  <input type="submit" name="submit" value="ОТПРАВИТЬ">

 
</form>

<form name="forma1">
    
 <table  border="0" cellspacing="5" cellpadding="5">

   <caption>Регистрация</caption>

   <tr>
    <td align="right" valign="top">Логин</td>
    <td><input type="text" name="name" size="25"></td>
   </tr>

   <tr>
    <td align="right" valign="top">e-mail</td>
    <td><input type="text" name="e-mail" size="25"></td>
   </tr>

   <tr>
    <td align="right" valign="top" >Пароль</td>
    <td>
     <input type="password" name="password" size="25">
    </td>
   </tr>

   <tr>
    <td align="right" valign="top" >Повтор пароля</td>
    <td>
     <input type="password" name="password2" size="25">
    </td>
   </tr>
   <tr>
    <td align="right" valign="top">О себе</td>
    <td>
     <textarea cols="30" rows="3" wrap="physical">
     </textarea>
    </td>
   </tr>

   <tr>
    <td align="right" colspan="2">
     <input type="submit" name="submit" value="Отправить">
     <input type="reset" name="reset" value="Очистить">
    </td>
   </tr>

 </table>

</form>
   </center></p>
<?php
$bb=12.3;
$p=12.2;
$b=false;
$n=4;

if($b)
	$a=$n+$p-$bb;
else
	$a=$n-$p+$bb;
echo "Hello world!",$a;

?>
<p><center><img src="2.gif" alt="minyons"></center></p>
</html>