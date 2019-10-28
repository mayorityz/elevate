<?php
class Portfolio extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // $this->view->render("frontend", "portfolio/port1/grid2", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function port1_grid_2()
    {
        $this->view->render("frontend", "portfolio/port1/grid2", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function port1_grid_3()
    {
        $this->view->render("frontend", "portfolio/port1/grid3", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function port1_mason_2()
    {
        $this->view->render("frontend", "portfolio/port1/mas", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function port1_mason_3()
    {
        $this->view->render("frontend", "portfolio/port1/mas2", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function port2_grid_2()
    {
        $this->view->render("frontend", "portfolio/port2/grid2", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function port2_grid_3()
    {
        $this->view->render("frontend", "portfolio/port2/grid3", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function port2_mason_2()
    {
        $this->view->render("frontend", "portfolio/port2/mas", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function port2_mason_3()
    {
        $this->view->render("frontend", "portfolio/port2/,as2", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function port3_grid_2()
    {
        $this->view->render("frontend", "portfolio/port3/grid2", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function port3_grid_3()
    {
        $this->view->render("frontend", "portfolio/port3/grid3", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function port3_mason_2()
    {
        $this->view->render("frontend", "portfolio/port3/mas", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function port3_mason_3()
    {
        $this->view->render("frontend", "portfolio/port3/mas2", array('title' => "Meet the REEN ELEVATE team"));
    }

    // 

    public function portfolio1()
    {
        $this->view->render("frontend", "portfolio/ports/port1", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function portfolio2()
    {
        $this->view->render("frontend", "portfolio/ports/port2", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function portfolio3()
    {
        $this->view->render("frontend", "portfolio/ports/port3", array('title' => "Meet the REEN ELEVATE team"));
    }

    public function portfolio4()
    {
        $this->view->render("frontend", "portfolio/ports/port4", array('title' => "Meet the REEN ELEVATE team"));
    }
}
