<?php

class Controller_security extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }


// ......................connection.......................

    public function action_user_connection()
    {
        $this->render('user_connection');
    }

//...............login......................

    public function action_login()

    {
        $m=Security::get_model();

        $data = ['user'=>$m->get_login()];

        $this->render("login",$data);
        
    }

//.............................disconnection...............................

    public function action_disconnection()
    {
        $this->render('disconnection');
    }
// ...........make registration.............
    public function action_user_registration()
    {
        $this->render('user_registration');
    }

}