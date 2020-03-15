<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your files</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
    <?php if(@$result): ?>
        <a href="../">Main page</a>
            <h1>Your files</h1>
        <div class="file__wrapper">
        <?php for($i = 0 ; $i < $rows ; ++$i): ?>
        <div class='file__item'>
            <?php 
                $row = $result->fetch_assoc();
                $fileSrc = '/project/upload/' . $row['file'];
            ?>
            <div class="file_img" style='background-image: url(<?=$fileSrc  ?>)'></div>
            <p><?=$row['file'] ?></p>
        </div>
        <?php endfor; ?>
        </div>
    <?php endif; ?> 
    </div>
</body>
</html>