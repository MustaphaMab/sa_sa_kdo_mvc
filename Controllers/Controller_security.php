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

    public function action_login_form()

    {
        $m=Security::get_model();

        $data = ['user'=>$m->get_login_form()];

        $this->render("login_form",$data);
        
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