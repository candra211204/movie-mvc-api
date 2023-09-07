<?php
class Home extends Controller
{
    // Default method 
    public function index()
    {
        $data['title'] = 'Home';
        if (isset($_GET['q'])) {
            $data['model'] = $this->model('Home_model')->getDataApi($_GET['q']);
        }

        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}
