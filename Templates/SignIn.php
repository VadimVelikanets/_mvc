<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sign up</title>
</head>
<body>
    <div class="container">
        <span><?= @$success ?></span>
        <?php if(isset($errors)) : ?>
        <span><?= array_shift($errors) ?></span>
        <hr>
        <?php endif; ?>
        <h1>Login</h1>
        <form action='signin' method='POST'>
            <input type="text" placeholder='login' name='login' value='<?= @$data['login'] ?>'> <br>
            <input type="password" placeholder='password' name='password'> <br>
            <button type='submit' name='do_login'>Sign In</button>
        </form>  
    </div>

</body>
