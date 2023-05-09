<?php
if(isset($_POST["submit"]))
{
$name=$_POST["t1"];
$m1=$_POST["t2"];
$m2=$_POST["t3"];
$m3=$_POST["t4"];
$m4=$_POST["t5"];
$m5=$_POST["t6"];
$m6=$_POST["t7"];
$m7=$_POST["t8"];
$total=$m1+$m2+$m3+$m4+$m5+$m6+$m7;
$per=($total*100)/700;
print "<b>MARK LIST <br>";
print "--------------------------------<br>";
print "Name : $name<br>";
print "Mark1 : $m1<br>";
print "Mark2 : $m2<br>";
print "Mark3 : $m3<br>";
print "Mark4 : $m4<br>";
print "Mark5 : $m5<br>";
print "Mark6 : $m6<br>";
print "Mark7 : $m7<br>";
print "--------------------------------<br>";
print "Total Mark : $total<br>";
print "Percentage : $per<br>";
if($per>=80)
echo "Grade : A";
else if($per>=60 and $per<80)
echo "Grade : B";
else if($per>=50 and $per<60)
echo "Grade : C";
else
echo "Grade : Failed";
}
else
{
?>
<form action="marksheet.php" method="post">
<table>
<tr>
<td><b>ENTER DETAILS OF STUDENT<hr></b></td>
</tr>
<tr>
<td>Enter name:</td>
<td><input type="text" name="t1" value=""required></td>
</tr>
<tr>
<td>Enter Mark1:</td>
<td><input type="text" name="t2" value=""required></td>
</tr>
<tr>
<td>Enter Mark2:</td>
<td><input type="text" name="t3" value=""required></td>
</tr>
<tr>
<td>Enter Mark3:</td>
<td><input type="text" name="t4" value=""required></td>
</tr>

<tr>
<td>Enter Mark4:</td>
<td><input type="text" name="t5" value=""required></td>
</tr>
<tr>
<td>Enter Mark5:</td>
<td><input type="text" name="t6" value=""required></td>
</tr>
<tr>
<td>Enter Mark6:</td>
<td><input type="text" name="t7" value=""required></td>
</tr>
<tr>
<td>Enter Mark7:</td>
<td><input type="text" name="t8" value=""required></td>
</tr>
<tr>
<th colspan=2><input type="submit" name="submit" value="submit"></th>
</tr>
</table>
<?php
}
?>