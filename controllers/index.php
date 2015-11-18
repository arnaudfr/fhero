<?php

    /**
     * Created by PhpStorm.
     * User: albert
     * Date: 17/11/15
     * Time: 16:09
     */
    class Index extends Controller {

        function __construct() {
            parent::__construct();
        }

        function index() {
            echo 'INSIDE INDEX INDEX';
            $this->view->render('index/index');
        }

        function details() {
            $this->view->render('index/index');
        }

    }