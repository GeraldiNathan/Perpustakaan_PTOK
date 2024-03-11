<?php

class Controller
{
    public function view($view, $data = [])
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['nama']) && $view == 'dashboard/index') {
            header('Location:' . BASEURL);
            exit();
        }

        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
