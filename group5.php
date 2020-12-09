<!DOCTYPE html>
<html lang="nl">
<head>
		<title>De Splinter - Rekenen Groep 5</title>
		<meta name=description content="�">
    <link rel="stylesheet" href="css/formstyle.css">

</head>
<header>
    <div class = <h1> basisschool De Splinter </h1>
        <div class = "topnav">
            <a href="index.html">Home</a>
            <a href="info.html">Waar staan we voor </a>
            <a class = "active"href="rekenen.html">RekenQuiz</a>
            <a href="contact.html">Contact</a>
        </div>
</header>

<?php

$min = 0;
$max = 100;

// Vraag 1
$Num1V1 = rand ($min , $max);
$Num2V1 = rand ($min , $max);
$som1 =  $Num1V1."|+|".$Num2V1;
// Vraag 2
$Num1V2 = rand ($min , $max);
$Num2V2 = rand ($min , $max);
$som2 =  $Num1V2."|+|".$Num2V2;
// Vraag 3
$Num1V3 = rand ($min , $max);
$Num2V3 = rand ($min , $max);
$som3 =  $Num1V3."|-|".$Num2V3;
// Vraag 4
$Num1V4 = rand ($min , $max);
$Num2V4 = rand ($min , $max);
$som4 =  $Num1V4."|-|".$Num2V4;
// Vraag 5
$Num1V5 = rand ($min , $max);
$Num2V5 = rand ($min , $max);
$som5 =  $Num1V5."|*|".$Num2V5;
?>
<body>
    <form action="group4awns.php" method="post">
        <!--Vraag 1-->
        <p><?php
            echo "Wat is $Num1V1 + $Num2V1?";
        ?></p>
        <p><input type="number" name="awns1"> </p>
        <!--Vraag 2-->
        <p><?php
            echo "Wat is $Num1V2 + $Num2V2?";
        ?></p>
        <p><input type="number" name="awns2"></p>
        <!--Vraag 3-->
        <p><?php
            echo "Wat is $Num1V3 - $Num2V3?";
        ?></p>
        <p><input type="number" name="awns3"></p>
        <!--Vraag 4-->
        <p><?php
            echo "Wat is $Num1V4 - $Num2V4?";
            ?></p>
        <p><input type="number" name="awns4"></p>
        <!--Vraag 5-->
        <p><?php
            echo "Wat is $Num1V5 x $Num2V5?";
            ?></p>
        <p><input type="number" name="awns5"></p>
        <input type="hidden" name="getal1" value="<?php echo $som1;?>">
        <input type="hidden" name="getal2" value="<?php echo $som2;?>">
        <input type="hidden" name="getal3" value="<?php echo $som3;?>">
        <input type="hidden" name="getal4" value="<?php echo $som4;?>">
        <input type="hidden" name="getal5" value="<?php echo $som5;?>">
        <input type="submit">
    </form>
</body>
</html>