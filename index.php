<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Super Sudoku Signin</title>
    <link href="style/style.css" type="text/css" rel="stylesheet" />

</head>
<body>

<header>
    <img src="img/super2-600.png" alt="Sudoku Banner" width="730" height="225">
</header>

<p class="general"> <img src="img/gameR300.png"> </p>

<div class="general">
    <form id="signin" action="post/login-post.php" method="POST">
            <p>Welcome to Super Sudoku</p>
            <p><label for="name">Your Name: </label>
                <input type="text" name="name" id="name"></p>
            <p><input type="submit" value="Start Game"></p>
    </form>
</div>
<p class="general"><a href="#" id="cheat"><b>Cheat</b></a></p>


</body>
</html>