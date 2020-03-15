<?php 
    class Index{
        public $view;
        function indexAction()
        {
            echo 'Мы попали в контроллер ' . __CLASS__  . ' и вызываем экшон ' . __METHOD__;
            @$this->view->var = 'Переменная контроллера Index';
        }
        function mainAction()
        {
            echo 'Мы попали в контроллер ' . __CLASS__  . ' и вызываем экшон ' . __METHOD__;
        }
    }