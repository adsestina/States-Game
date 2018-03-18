<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fifty Nifty!</title>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Bungee+Inline|Luckiest+Guy" rel="stylesheet">
    <link rel="stylesheet" href = "css/Hw5.css">
</head>
<body>
<form action="gameState.php" method="post">
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
            echo "<p><div class='congrats'><img src=\"css/goldStar.png\" alt=\"goldStar\" style=\"width:100px;height100px;\">Congratulations!!<img src=\"css/goldStar.png\" alt=\"goldStar\" style=\"width:100px;height100px;\"></div></p>";
            echo "<br><p><div class='capitalState'>".$state. " is the capital of ".$capital."</div></p>";
            echo "<br><div class='buttonCenter'><input type =\"submit\" name =\"guess\" value=\"Guess Again!\"></div>";
            $score++;
            echo "</form><br><p><div class='fontScore'>
            <span>Y</span>
            <span>o</span>
            <span>u</span>
            <span>r</span>
            <span>&nbsp;</span>
            <span>s</span>
            <span>c</span>
            <span>o</span>
            <span>r</span>
            <span>e</span>
            <span>&nbsp;</span>
            <span>i</span>
            <span>s</span>
            <span>:</span>
            <span>&nbsp;</span> 
             <span>" . $score."</span></div></p>";
            $_SESSION["score"] = $score;

        } else {
            echo "<p><div class='incorrect'>Sorry that is incorrect!</div></p>";
            echo "<div class='capitalState'>".$state. " is the capital of ".$capital."</div></form>";
            echo "<br><br><div class='buttonCenter'><button><a href=\"niftyFifty.php\">Try Again</a></button></div><br>";
            echo "<div class='fontYellow'>Is this too hard?</div><br><br><div class='buttonCenter'><button><a href=\"https://www.youtube.com/results?search_query=videos+of+cats\">Get out of here!</a></button></div>";
            echo "<br><p><div class='fontScore'>
            <span>F</span>
            <span>i</span>
            <span>n</span>
            <span>a</span>
            <span>l</span>
            <span>&nbsp;</span>
            <span>s</span>
            <span>c</span>
            <span>o</span>
            <span>r</span>
            <span>e</span>
            <span>:</span>
             <span>&nbsp;</span><span>" . $score."</span></div></p>";
            $score = 0;
            $_SESSION["score"] = $score;

        }
    }

    ?>
</form>

</body>
</html>