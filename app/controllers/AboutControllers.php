<?php
    class AboutControllers extends BaseController
    {
        public function __construct()
        {
            $this->aboutModel = $this->model('AboutModels');
        }

        public function getUsers() : mixed
        {
            $users = $this->aboutModel->getUserInfo();
            $result = ['users' => $users];

            return $result;
        }

        public function getInfoMe()
        {
            $myinfo = $this->aboutModel->getMyInfo();
            $result = ['myinfo' => $myinfo];

            return $result;
        }


        public function index()
        {
            $data = [
                'title' => 'Over mij',
                'myinfo' => $this->getInfoMe()
            ];
            $this->view('about/index', $data);
        }
    }