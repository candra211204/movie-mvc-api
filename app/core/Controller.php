<?php
class Controller
{
    // Set view
    public function view($view, $data = [])
    {
        require_once '../app/view/' . $view . '.php';
    }

    // Set model
    public function model($model)
    {
        require_once '../app/model/' . $model . '.php';
        return new $model;
    }
}
