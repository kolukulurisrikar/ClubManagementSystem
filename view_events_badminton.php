
 
<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 

 /*Connect to mysql server*/ 
$link = mysql_connect('localhost', 'root', '');  

/*Check link to the mysql server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . mysql_error());
 } 

/*Select database*/ 
$db = mysql_select_db('clubsmanagementsystem'); 
if(!$db)
{
 die("Unable to select database"); 
}



 /*Create query*/ 
$qry = 'SELECT * FROM conducts WHERE club_name="badminton"'; 

/*Execute query*/ 
$result = mysql_query($qry);
echo '<h1>The Event Details of - </h1>';

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th>club_name</th> 
<th> event_name </th>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['club_name'].'</td>
<td>'.$row['event_name'].'</td>
</tr>'; 
}

echo '</table>';
 
?>
