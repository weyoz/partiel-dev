<?php

class PostController extends AppController
{

    public function __construct()
    {
        parent::__construct();

        $this->model = new PostModel();

        if(!isset($_GET['action']) || $_GET["action"] == "home")
        {
            $this->home();
        }
        else if ($_GET["action"] == "register")
        {
            // Ou l'action correspondante
            $this->register();
        }
        else if ($_GET["action"] == "login")
        {
            // Ou l'action correspondante
            $this->login();
        }
        else
        {
            // Sinon appelle la page 404
            define("TITLE_HEAD", "ERROR 404");
            $this->load->view('404.php');
        }

    }

    public function home()
    {
        define("TITLE_HEAD", "Accueil");
        $this->load->view("home.php");
    }

    public function register()
    {
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        if ($password1 === $password2) {
            $password1 = crypt($password1, $password1);
            $data = $this->model->userRegister(array(
                        "table" => "user",
                        "column_name1" => "u_mail",
                        "colomn_name2" => "u_password",
                        "mail" => $_POST['email'],
                        "password" => $password1
            ));
            if(!$data)
            {
                // Si pas d'ID on apelle la page d'erreur
                define("TITLE_HEAD", "Erreur technique !");
                $this->load->view('view_error.php');
            }
            else
            {
                // Sinon comment is good
                $this->load->view('home.php', $data);
                echo "SUCCESS";
            }
        }
    }

    public function login()
    {
        $password = crypt($_POST['password'], $_POST['password']);
            $data = $this->model->userLogin(array(
                        "table" => "user",
                        "column_name1" => "u_mail",
                        "colomn_name2" => "u_password",
                        "mail" => $_POST['email'],
                        "password" => $password
            ));
            if(!$data)
            {
                // Si pas d'ID on apelle la page d'erreur
                define("TITLE_HEAD", "Erreur technique !");
                $this->load->view('view_error.php');
            }
            else
            {
                // Sinon comment is good
                $this->load->view('home.php', $data);
                session_start("trendyvan");
                var_dump($_SESSION);
                echo "SUCCESS";
            }
    }
}
