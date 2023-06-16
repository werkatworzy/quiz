<!DOCTYPE html>
<html>
    <head>
    <title>WYNIKI QUIZU MOLA KSIĄŻKOWEGO</title>
        <meta charset="utf-8" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@800&display=swap" rel="stylesheet">

        <style>
            body 
            {
        background-color: #F8F4F1;
            }
        
         </style>
 
    </head>
<body>

<div style=
'text-align: center;
    font-family: Calibri;
        font-size: 20px;
        font-style: bold;
        background-color: white;
        box-shadow: 0px 59px 24px rgba(54, 39, 27, 0.01), 0px 33px 20px rgba(54, 39, 27, 0.05), 0px 15px 15px rgba(54, 39, 27, 0.09), 0px 4px 8px rgba(54, 39, 27, 0.1), 0px 0px 0px rgba(54, 39, 27, 0.1);
        border-radius: 0px 0px 0px 0px;'>
<?
$question1=$_POST['question1'];
$question2=$_POST['question2'];
$question3=$_POST['question3'];
$question4=$_POST['question4'];
$question5=$_POST['question5'];

$score = 0;
if ($question1 =="a")
$score++;
if ($question2 =="b")
$score++;
if ($question3 =="b")
$score++;
if ($question4 =="c")
$score++;
if ($question5 =="d")
$score++;

echo "Twój wynik to: ";
echo $score;
echo "<br>";
echo "<br>";
if ($score == 0)
echo "Ups... masz książkowe zaległości";
if ($score == 1)
echo "Nie czytasz za dużo, prawda?";
if ($score == 2 || $score == 3)
echo "Nie jest najgorzej :)";
if ($score == 4 || $score == 5)
echo "Wow! Lektury nie mają przed Tobą tajemnic!"

?>
</body>
</html>