<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Main page</title>
</head>
<body>
    <div class="container">
    
   
   <?= 'Hello, ' . $userData->login ?> <br>
    <a href="user/logout">Log out</a>
    <br>

    <div>
        <img width=350 src=<?= $fileSrc?> alt="">
    </div>
    <div>
        <p>Login : <b><?= $userData->login  ?></b></p>
    </div>
    <div>
        <p>Email : <b><?= $userData->email  ?></b></p>
    </div>
    <div>
        <p>City : <b><?= $userData->city  ?></b></p>
    </div>
    <div>
        <p>Age : <b><?= $userData->age  ?></b></p>
    </div>
    <form method="post" action="main/upload" enctype = 'multipart/form-data' >
    <h3>Upload your files</h3>
    <input type="file" name="file"> <br>
    <input type="submit" name='upload' value="Upload">
    </form>
    <a href="user/userlist">Show all users</a> <br>
    <a href="file/files">Show your files</a>
    </div>
</body>
</html>