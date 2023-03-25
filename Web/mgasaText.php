<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment box</title>
</head>
<body>
    <form action="textSubmit.php" target="shower" method="get">
        <br>
        <label for="email">Enter your Email</label>
        <br>
        <input type="email" name="email" id="userEmail">
        <br>
        <label for="comment" >Comment:</label>
        <br>
        <input type="text" name="comment" id="userComment">
        <button type="submit">Submit</button>
    </form>
<iframe src="textSubmit.php" name ="shower" frameborder="0"></iframe>
</body>
</html>    