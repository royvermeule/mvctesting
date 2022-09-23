<?php

/** Get the date from the view
 * @return void
 */
class AboutControllers extends BaseController
{
    public function __construct()
    {
        $this->aboutModel = $this->model('AboutModels');
    }

    public function index($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == 'GET') {
            $info = $this->aboutModel->getContact($id);


            $data = [
                'title' => 'Contact',
                'info_email' => $info->user_email,
                'info_name' => $info->user_name
            ];
            $this->view('about/index', $data);
        }
    }


    public function contact(int $id)
    {
        if ($_SERVER["REQUEST_METHOD"] == 'GET') {
            $info = $this->aboutModel->getContact($id);


            $data = [
                'title' => 'Contact',
                'info_email' => $info->user_email,
                'info_phone' => $info->user_phoneNumber
            ];
            $this->view('about/contact', $data);
        }
    }
}
