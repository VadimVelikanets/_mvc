<?php 
    include './Model/db.php';
    class User{
       //Экшон авторизации
        function signinAction()
        {
            $data = $_POST;
            if(isset($data['do_login'])){
                $errors = [];
                $user = R::findOne('users', 'login = ?', [$data['login']]);
                if($user)
                {
                    if(password_verify($data['password'], $user->password))
                    {
                        $_SESSION['logged_user'] = $user; 
                        $success = 'You successfully logged! return to <a href="/_mvc">Main page</a>';
                    }           
                    else
                    {
                        $errors[] = 'Password is not correct!';
                    }
                } 
                else
                {
                    $errors[] = 'User is not find!';
                }
            }
            include 'Templates/SignIn.php';
        }
        //Экшон регистрации
        function signupAction()
        {
           $data = $_POST;
            if(isset($data['do_signup'])){
                $errors = [];
                if(trim($data['login']) == ''){
                    $errors[] = 'Login is empty!';
                }
                if(trim($data['email']) == ''){
                    $errors[] = 'Email is empty!';
                }
                if(trim($data['password']) == ''){
                    $errors[] = 'Password is empty!';
                }
                if(trim($data['age']) == ''){
                    $errors[] = 'Age is empty!';
                }
                if(trim($data['city']) == ''){
                    $errors[] = 'City is empty!';
                }        
                if(trim($data['password']) != $data['password2']){
                    $errors[] = 'Passwords are not correct!';
                }
                if(R::count('users', 'login = ?', [$data['login']]) > 0){
                    $errors[] = 'Login have been already exist!';
                }
                if(R::count('users', 'email = ?', [$data['email']]) > 0){
                    $errors[] = 'Email have been already exist!';
                }
                if(empty($errors)){

                    $user = R::dispense( 'users' );
                    $user->login = $data['login'];
                    $user->email = $data['email'];
                    $user->city = $data['city'];
                    $user->age = $data['age'];
                    //Загружаем файл 
                    $uploadname=basename($_FILES['file']['name']);//записываем имя файла
                    $uploadpath='upload/'.$uploadname; //указываем куда грузить файл

                    move_uploaded_file($_FILES['file']['tmp_name'], $uploadpath); //перемещение загруженного файла из временной папки сервера в папку, которую указали (uploadpath)

                    $user->file = $uploadname;
                    $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
                    R::store($user);

                    $message = 'Your account has been created!';
                }
            }
           include 'Templates/SignUp.php';
        }
        //Экшон выхода
        function logoutAction()
        {
            unset($_SESSION['logged_user']);
            header('Location: /_mvc');
        }
        function userlistAction()
        {
            $link = mysqli_connect('127.0.0.1', 'root', '', 'project_db')
            or die("Ошибка " . mysqli_error($link)); 
            //Users
            $query ="SELECT * FROM users ORDER BY age DESC ";
        
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        
             $rows = mysqli_num_rows($result); // количество полученных строк
             include 'Templates/Userlist.php';
        }
    }