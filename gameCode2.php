<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nifty Fifty!</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Bungee+Inline|Luckiest+Guy" rel="stylesheet">
    <link rel="stylesheet" href = "css/Hw5.css">
</head>
<body>
<form action="gameCode.php" method="post">
<?php
session_start();
/**
 * Created by PhpStorm.
 * User: adamsestina
 * Date: 2/8/18
 * Time: 8:16 PM
 */
include 'statesAndCapitals.php';
$score = 0;
$score = $_SESSION["score"];
$state = $_SESSION["state"];
$capital =$_SESSION["capital"];
$capitalGuess = htmlspecialchars($_POST["capital"]);
if(isset($_POST["guess"])) {
    if ($capitalGuess == $capital) {
        echo "<br> Congratulations!! that is correct";
        echo "<br>".$capital. " is the capital of ".$state.".";
        echo "<br><br><input type =\"submit\" name =\"guess\" value=\"Guess Again!\">";
        $score++;
        echo "</form> <br> Your score is: " . $score;
        $_SESSION["score"] = $score;

    } else {
        echo "Sorry that is incorrect!";
        echo "<br>".$capital. " is the capital of ".$state.".";
        echo "<br><br><button><a href=\"niftyFifty.php\">Try Again</a></button>";
        echo "<br><br>Is this too hard?<br><br><button><a href=\"https://www.youtube.com/results?search_query=videos+of+cats\">Get out of here!</a></button>";
        $state = 0;
    }
}

?>
</form>

</body>
</html>