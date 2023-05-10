<?php
include 'front.php';
if(isset($_POST["submit"]))
{
$qu1=$_POST["q1"];
$score=0;
$count=0;
if($qu1=="Rasmus Lerdorf")
{
$score=$score+10;
$count++;
}
$qu2=$_POST["q2"];
if($qu2=="Multidimentional array")
{
$score=$score+10;
$count++;
}
$qu3=$_POST["q3"];
if($qu3=="Cookie")
{
$score=$score+10;
$count++;
}
$qu4=$_POST["q4"];
if($qu4=="PHP: Hypertext Preprocessor")
{
$score=$score+10;
$count++;
}
$qu5=$_POST["q5"];
if($qu5=="/* commented code here */")
{
$score=$score+10;
$count++;
}
echo "Your correct answers is: $count<br/>";
echo "Your total score is: $score<br/>";
}
else
{
?>
<html>
<head>
<title>Quiz</title>
</head>
<body>
<form action="quiz.php" method="post">
<p><b>1. Who is the inventor of PHP?</b></p><br/>
<input type="radio" name="q1" value="Rasmus Lerdorf">Rasmus Lerdorf<br/>
<input type="radio" name="q1" value="Dennis Ritchie">Dennis Ritchie<br/>
<input type="radio" name="q1" value="Richard Stallman">Richard Stallman<br/>
<hr>
<p><b>2. Which of the following array represents an array containing one or more 
arrays?</b></p><br/>
<input type="radio" name="q2" value="Associative array">Associative array<br/>
<input type="radio" name="q2" value="Multidimentional array">Multidimentional 
array<br/>

<input type="radio" name="q2" value="Numeric array">Numeric array<br/>
<hr>
<p><b> 3. ______ is the small piece of information stored on the client 
side?</b></p><br/>
<input type="radio" name="q3" value="Cookie">Cookie<br/>
<input type="radio" name="q3" value="Session">Session<br/>
<input type="radio" name="q3" value="None">None of these<br/>
<hr>
<p><b> 4. What does PHP stand for?</b></p><br/>
<input type="radio" name="q4" value="Preprocessed Hypertext Page">Preprocessed 
Hypertext Page<br/>
<input type="radio" name="q4" value="Hypertext Markup Language">Hypertext 
Markup Language<br/>
<input type="radio" name="q4" value="PHP: Hypertext Preprocessor">PHP: 
Hypertext Preprocessor<br/>
<hr>
<p><b> 5. Which of the following is the way to create comments in 
PHP?</b></p><br/>
<input type="radio" name="q5" value="/* commented code here */">/* commented 
code here */<br/>
<input type="radio" name="q5" value="** commented code here **">** commented 
code here **<br/>
<input type="radio" name="q5" value="#commented code here #">#commented code 
here #<br/>
<hr>

<input type="submit" name="submit"" value="Submit">
</body>
</html>
<?php
}
include 'footer.php';
?>
