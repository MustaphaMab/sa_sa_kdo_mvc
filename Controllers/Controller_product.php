<?php

class Controller_product extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_mugs()
    {
        $m = Product::get_model();
        $data = ['mugs'=> $m->get_all_mugs()];
        $this->render("mugs",$data);
    }

    public function action_all_portes_cles()
    {
        $m = Product::get_model();
        $data = ['portes_cles'=> $m->get_all_portes_cles()];
        $this->render("portes-cles",$data);
    }
    
}