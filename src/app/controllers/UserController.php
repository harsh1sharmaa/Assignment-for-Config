<?php

use Phalcon\Mvc\Controller;


class UserController extends Controller
{
    public function indexAction()
    {
    }

    public function heyAction()
    {

        // die();
        // $this->view->message = "hello world";
        // echo "show";
        // die();

          $config=$this->config;
        //   print_r($config);
        // //   die();
        $this->view->message=[$config->app->name , $config->app->version,$config->app->time];
        // $this->view->message = "hello world";
    }

    public function dAction(){

        $db=$this->db;
        // $config=$this->config;
        print_r($db);
    
       
        die();
    }
}
