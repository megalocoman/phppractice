<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars("result.php") ?>" result.php method="post">
        name: <input type="text" name="name"><br>
        email: <input type="email" name="email"><br>
        website: <input type="text" name="website"><br>
        comment: <input type="textarea" rows="6" cols="40" name="comment"><br>
        gender: 
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">female
        <input type="radio" name="gender" value="other">Other
        input: <input type="submit">
    </form>
</body>
</html>