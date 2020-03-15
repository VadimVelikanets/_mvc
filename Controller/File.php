<?php 
    include './Model/db.php';
    class File{

        function filesAction()
        {
            $fileOwner = $_SESSION['logged_user']->login;
         
            $link = mysqli_connect('127.0.0.1', 'root', '', 'project_db')
            or die("Ошибка " . mysqli_error($link)); 
            //Users
            $query ="SELECT * FROM files WHERE owner =  '$fileOwner'";
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
         
            $rows = mysqli_num_rows($result); // количество полученных строк

            include 'Templates/File.php';
        }
    }