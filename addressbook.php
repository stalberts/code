<?php
if(isset($_POST["submit"]))
{
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
die('Could not connect:'.mysql_error());
}
$check=mysql_select_db('db_address');
if(!$check)
{
die('Could not connect'.mysql_error());
}
$name=$_POST["t1"];
$hname=$_POST["t2"];
$pos=$_POST["t3"];
$city=$_POST["t4"];
$dst=$_POST["t5"];
$pin=$_POST["t6"];
$ph=$_POST["t7"];
$sql="insert into 
tbl_address_book(name,h_name,po,city,district,pincode,phno)values('".$name."','".$h
name."','".$pos."','".$city."','".$dst."','".$pin."','".$ph."')";
$retval1=mysql_query($sql,$conn);
if(!$retval1)
{
die('Could not connect:'.mysql_error());
}
else
{
echo "Inserted successfully";
}
}
else
{
?>
<form action="insert.php" method="post">
<table>
<tr>
<td><b>ENTER DETAILS<hr></b></td>
</tr>
<tr>
<td>Enter person name:</td>
<td><input type="text" name="t1" value=""required></td>
</tr>
<tr>
<td>Enter house name:</td>
<td><input type="text" name="t2" value=""required></td>
</tr>
<tr>
<td>Enter post office:</td>
<td><input type="text" name="t3" value=""required></td>
</tr>
<tr>
<td>Enter city:</td>
<td><input type="text" name="t4" value=""required></td>
</tr>
<tr>
<td>Enter district:</td>
<td><input type="text" name="t5" value=""required></td>
</tr>
<tr>
<td>Enter pin code:</td>
<td><input type="text" name="t6" value=""required></td>
</tr>
<tr>
<td>Enter phone number:</td>
<td><input type="text" name="t7" value=""required></td>
</tr>
<tr>
<th colspan=2><input type="submit" name="submit" value="submit"></th>
</tr>
</table>
<?php
}
?>