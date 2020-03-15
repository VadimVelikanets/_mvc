
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
        <span><?=@$message ?>
        <?php if(isset($message)): ?>
        <a href="signin">Sign In</a>
        <?php endif;?>
        </span>
        <?php if(isset($errors)) : ?>
            <span><?= array_shift($errors) ?></span>
            <hr>
        <?php elseif(isset($message)) : ?>
            <span><?= $message ?></span>
            <hr>
        <?php endif; ?>
        <h1>Registration</h1>
        <form action='signup' method='POST' enctype = 'multipart/form-data' >
            <input type="text" placeholder='login' name='login' value='<?= @$data['login'] ?>'> <br>
            <input type="email" placeholder='E-mail' name='email' value='<?= @$data['email'] ?>'> <br>
            <input type="text" placeholder='Age' name='age' value='<?= @$data['age'] ?>'> <br>
            <input type="text" placeholder='City' name='city' value='<?= @$data['city'] ?>'> <br>
            <input type="file" name="file"> <br>
            <input type="password" placeholder='password' name='password'> <br>
            <input type="password" placeholder='repeat password' name='password2'> <br>
            <button type='submit' name='do_signup'>Sign Up</button>
          
        </form>
    </div>
</body>
</html>
