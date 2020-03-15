<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of users</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
    <a href="../">Main page</a>
    <h1>List of users. From older to younger</h1>
        <div class="users_wrapper">
       <?php if($result): ?>

             <?php for($i = 0 ; $i < $rows ; ++$i): ?>
                <div class='user__item'>
                
                    <?php 
                      $row = $result->fetch_assoc();
                      $fileSrc = '/project/upload/' . $row['file'];
                    ?>
                    <h2> <?= $row['login'] ?> </h2>
                    <img width=350 src=<?= $fileSrc?> alt="">
                    <p>Age: <b> <?= $row['age'] ?> </b></p>
                    <p>Email: <b> <?= $row['email'] ?> </b></p>
                    <p>City: <b> <?= $row['city'] ?> </b></p>
                   <hr>
                </div>
            <?php endfor; ?>
        <?php endif; ?> 
        </div>
    </div>
</body>
</html>