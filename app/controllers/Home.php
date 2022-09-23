<?php
class Home extends BaseController
{
    public function __construct()
    {
        $this->aboutModel = $this->model('AboutModels');
    }

    public function index()
    {
        $record = $this->aboutModel->getUserInfo();

        $rows = '';

        foreach ($record as $value) {
            $rows .= "<tr>
                        <td>" . URLROOT . "/AboutControllers/index/$value->Id</td>
                    </tr>";
        }
        $data = [
            'title' => 'Home page',
            'getById' => $rows
        ];

        $this->view('index', $data);
    }
}
