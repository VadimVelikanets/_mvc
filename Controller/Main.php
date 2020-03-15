<?php
include './Model/db.php';
class Main
{
    function mainAction()
    {
      //Ищем пользователя в сессии, и выбираем ему шаблон
      if(isset($_SESSION['logged_user']))
      {
        $userData = $_SESSION['logged_user'];
        $fileSrc = '/project/upload/' . $userData->file;
        $tpl = 'Templates/MainLogged.php';
      }
      else
      {
        $tpl = 'Templates/MainUnLogged.php';
      }
      include $tpl;
      
    }
    function uploadAction()
    {
      $data = $_POST;

      if(isset($data['upload'])){
          $uploadname=basename($_FILES['file']['name']);//записываем имя файла
          $uploadpath='upload/'.$uploadname; //указываем куда грузить файл
  
          move_uploaded_file($_FILES['file']['tmp_name'], $uploadpath); //перемещение загруженного файла из временной папки сервера в папку, которую указали (uploadpath)
  
          $files = R::dispense( 'files' );
          $files->owner = $_SESSION['logged_user']->login;
          $files->file = $uploadname;
          R::store($files);
          header('Location: /_mvc');
      }
    }

}