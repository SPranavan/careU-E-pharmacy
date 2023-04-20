<?php

    class customers extends Controller{
        private $CustomerModel;

        public function __construct()
        {
            $this->CustomerModel = $this->model('Customer');
        }

        public function index()
        {
            $this->CustomerModel = $this->model('Customer');
        }

        
    }