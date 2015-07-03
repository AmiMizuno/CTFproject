<?php
if (isset($_COOKIE['userid']))   
{
$link = mysql_connect('127.0.0.1', 'root', '')
    or die('Не удалось соединиться: ' . mysql_error());
mysql_select_db('ctfbd') or die('Не удалось выбрать базу данных');
$login='login';
$email='email';
$info='info';
$us=$_COOKIE["userid"];
$query = "SELECT * FROM users WHERE info2='$us'";
$result = mysql_query($query) or die('Запрос не удался: '. mysql_error());
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
    {
		$login=$line['login'];
		$email=$line['email'];
		$info=$line['info'];
	}
$a=sprintf('<html>
<body bgcolor="#641c10">
<p><center><img src="1.png" alt="mikky"></center></p>
<font color="#fff2b4"><p><center><h1>ТАВЕРНА МО</h1></center></p></font>

<p><center><table>
 <tr><td><img src="br.png" alt="mikky"></td>
 <td>
<p><center><font color="#fff2b4"><h3>Профиль</h3>
 <table width="300" cellspacing="2"  border="2" bgcolor="#fffcff">
				 <tr>
				   <td><b>Логин</b></td>
				   <td>%s</td>
				 </tr>
				 <tr>
				  <td> <b>Почта</b></td>
				   <td>%s</td>
				 </tr>
				 <tr>
				   <td><b>О себе</b></td>
				   <td>%s</td>
				 </tr>
				 
			   </table>

   </center></p>
   </td>
   </table>
     </center></p>',$login,$email,$info);
echo $a;
}
else
echo '<html>
<body bgcolor="#641c10">
<p><center><img src="1.png" alt="mikky"></center></p>
<font color="#fff2b4"><p><center><h1>ТАВЕРНА МО</h1></center></p></font>

<p><center><table>
 <tr><td><img src="12.gif" alt="mikky"></td>
 <td>
<p><center><font color="#fff2b4"><h3>Вы не аторизованы</h3>
 <table width="300" cellspacing="2"  border="2" bgcolor="#fffcff">
				 <tr>
				   <td><b>Логин</b></td>
				   <td>------</td>
				 </tr>
				 <tr>
				  <td> <b>Почта</b></td>
				   <td>------</td>
				 </tr>
				 <tr>
				   <td><b>О себе</b></td>
				   <td>------</td>
				 </tr>
				 
			   </table>

   </center></p>
   </td>
   </table>
     </center></p>';


	

?>


</html>