<?php
  require_once('libs/Smarty.class.php');   
    class LessonsView{
        private $smarty;
        function __construct(){
          $URL = 'http://'. $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
          $this->smarty = new Smarty();
          $this->smarty->assign('URL', $URL);
        }

        function showLessons($lessons){
          $this->smarty->assign('lessons', $lessons);
          $this->smarty->display('templates/home.tpl');
        }
        function errorAdd($error, $lessons){
          $this->smarty->assign('error', $error);
          $this->smarty->assign('lessons', $lessons);
          $this->smarty->display('home.tpl');

        }
    }
?>