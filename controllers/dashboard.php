<?php

    /**
     * Created by PhpStorm.
     * User: albert
     * Date: 17/11/15
     * Time: 20:54
     */
    class Dashboard extends Controller {

        function __construct() {
            parent::__construct();
            Session::init();
            $logged = Session::get('loggedIn');
            if ($logged == false) {
                Session::destroy();
                header('location: login');
                exit;
            }
            //Integrer Javascript
            $this->view->js = array('dashboard/js/default.js');
        }


        function index()
        {
            $this->view->render('dashboard/index');
        }

        function logout()
        {
            Session::destroy();
            header('location:../login');
            exit;
        }

        function xhrInsert()
        {
            $this->model->xhrInsert();
        }

        function xhrGetListings()

        {
            $this->model->xhrGetListings();
        }

        function xhrDeleteListing()
        {
            $this->model->xhrDeleteListing();
        }
    }