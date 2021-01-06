<!DOCTYPE html>
<html lang="nl">
<head>
    <title>De Splinter - Uitslagen Groep 5</title>
    <meta name=description content="�">
    <meta charset=utf-8>
    <link rel="stylesheet" href="css/formstyle.css">

</head>
<body>
<header>
    <img src="images/logo.jpg" alt="Logo Of Ceators" width="100" height="100"><br />
    <div class = <h1> basisschool De Splinter </h1>
        <div class = "topnav">
            <a href="index.html">Home</a>
            <a href="info.html">Waar staan we voor </a>
            <a class = "active"href="rekenen.html">RekenQuiz</a>
            <a href="contact.html">Contact</a>
        </div>
    </div>
</header>

<?php

    $som1 = explode('|',$_POST['getal1']);
    $som1[0]; //getal 1
    $som1[1]; //operator
    $som1[2]; //getal 2
    switch($som1[1]){
        case "+":
            $uitk1 = $som1[0] + $som1[2];
            break;
    }
    $som2 = explode('|',$_POST['getal2']);
    $som2[0]; //getal 1
    $som2[1]; //operator
    $som2[2]; //getal 2
    switch($som2[1]){
        case "+":
            $uitk2 = $som2[0] + $som2[2];
        break;
}
    $som3 = explode('|',$_POST['getal3']);
    $som3[0]; //getal 1
    $som3[1]; //operator
    $som3[2]; //getal 2
    switch($som3[1]){
        case "-":
            $uitk3 = $som3[0] - $som3[2];
            break;
}
    $som4 = explode('|',$_POST['getal4']);
    $som4[0]; //getal 1
    $som4[1]; //operator
    $som4[2]; //getal 2
    switch($som4[1]){
        case "-":
            $uitk4 = $som4[0] - $som4[2];
            break;
}
    $som5 = explode('|',$_POST['getal5']);
    $som5[0]; //getal 1
    $som5[1]; //operator
    $som5[2]; //getal 2
    switch($som5[1]){
        case "*":
            $uitk5 = $som5[0] * $som5[2];
            break;
}

    $ans1 = $_POST['awns1'];
    $ans2 = $_POST['awns2'];
    $ans3 = $_POST['awns3'];
    $ans4 = $_POST['awns4'];
    $ans5 = $_POST['awns5'];
    //$uitk1 = $_POST['getal1'];
    //$uitk2 = $_POST['getal2'];
    //$uitk3 = $_POST['getal3'];
    //$uitk4 = $_POST['getal4'];
    //$uitk5 = $_POST['getal5'];
    $correct = 0;

    if (!empty($_POST)) {
        if ($ans1 == $uitk1)
        {
            $correct++;
            Echo "<p> vraag 1 is correct!</p>";
        }
        else {
            Echo "<p> vraag 1 is incorrect!</p>";
        }
    }


    if (!empty($_POST)) {
        if ($ans2 == $uitk2)
    {
        $correct++;
        Echo "<p> vraag 2 is correct!</p>";
    }
        else {
            Echo "<p> vraag 2 is incorrect!</p>";
        }
    }


if (!empty($_POST)) {
    if ($ans3 == $uitk3)
    {
        $correct++;
        Echo "<p> vraag 3 is correct!</p>";
    }
    else {
        Echo "<p> vraag 3 is incorrect!</p>";
    }
}


if (!empty($_POST)) {
    if ($ans4 == $uitk4)
    {
        $correct++;
        Echo "<p> vraag 4 is correct!</p>";
    }
    else {
        Echo "<p> vraag 4 is incorrect!</p>";
    }
}


if (!empty($_POST)) {
    if ($ans5 == $uitk5)
    {
        $correct++;
        Echo "<p> vraag 5 is correct!</p>";
    }
    else {
        Echo "<p> vraag 5 is incorrect!</p>";
    }
}

echo "<p>je hebt $correct correct!</p>";

    if ($correct == 0)
    {
        echo "<p>Je hebt hellaas geen goede antwoorden!</p>";
        echo ' 
<!DOCTYPE html>
<html>
<img src="images/Bad.gif" width="280" height="125" title="" />
</html>
';
    }
    elseif ($correct == 1)
    {
        echo "<p>Je hebt 1 goed antwoord!</p>";
        echo ' 
<!DOCTYPE html>
<html>
<img src="images/Monkey.gif" width="280" height="125" title="" />
</html>
';
    }
    elseif ($correct == 2)
    {
        echo "<p>Je hebt 2 goed antwoord!</p>";
        echo ' 
<!DOCTYPE html>
<html>
<img src="images/Darth.gif" width="280" height="125" title="" />
</html>
';
    }
    elseif ($correct == 3)
    {
        echo "<p>Je hebt 3 goed antwoord!</p>";
        echo ' 
<!DOCTYPE html>
<html>
<img src="images/Fortnite.gif" width="280" height="125" title="" />
</html>
';
    }
    elseif ($correct == 4)
    {
        echo "<p>Je hebt 4 goed antwoord!</p>";
        echo ' 
<!DOCTYPE html>
<html>
<img src="images/Fat.gif" width="280" height="125" title="" />
</html>
';
    }
    elseif ($correct == 5)
    {
        echo "<p>Je hebt 5 goed antwoord!</p>";
        echo ' 
<!DOCTYPE html>
<html>
<img src="images/Sponge.gif" width="280" height="125" title="" />
</html>
';
    }

?>
</body>
</html>
