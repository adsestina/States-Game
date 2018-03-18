
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fifty Nifty!</title>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800|Bungee+Inline|Luckiest+Guy" rel="stylesheet">
    <link rel="stylesheet" href = "css/Hw5.css">
</head>
<body>
<form action="gameCode2.php" method="post">
<?php
/**
 * Created by PhpStorm.
 * User: adamsestina
 * Date: 2/6/18
 * Time: 9:02 PM
 */
include 'statesAndCapitals.php';
session_start();
$score = 0;
if($_SESSION["score"]!= 0) {
    $score = $_SESSION["score"];
}else {
    $_SESSION["score"] = 0;
}
$newCapital= ("");
$newState = ("");
echo "<p>State: ";
$state = array_rand($fiftyStates, 1);
foreach ($fiftyStates as $x => $capital) {
    if ($x == "$state") {
        $newState = $state;
        $newCapital = $capital;
    }
}
echo $state."</p>";

$_SESSION["state"] = $newState;
$_SESSION["capital"] = $newCapital;

    echo "<p><div class='fontCapital'>Capital: <input type=\"value\"name =\"capital\" id=\"bigBox\"></div></p>";
?>

<div class="buttonCenter"><input type ="submit" name ="guess" value="Guess"></div>

<!--//echo "</form> <br><br><br><p> Your score is: ".$score."</p>";-->

</form>

</body>
</html>