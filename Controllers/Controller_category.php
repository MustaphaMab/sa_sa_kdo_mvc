<?php



class Controller_category extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    
public function action_all_category()
{
    $m=Category::get_model();
    $data=['category'=>$m->get_all_category()];
    $this->render("all_category",$data);
}
    
}