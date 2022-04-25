<?php

namespace app\controllers;

class BrowsingHistory extends \app\core\Controller{

    public function index() {
        if (isset($_SESSION['user_id'])) {
            $browsingHistory = new \app\models\BrowsingHistory();
            $data['browsingHistory'] = $browsingHistory->getAll($_SESSION['user_id']);
            if (isset($_POST['action'])) {
                $this->clearHistory();
            }
            $this->view('BrowsingHistory/index', $data['browsingHistory']);
        }
    }

    function clearHistory() {
        $browsingHistory = new \app\models\BrowsingHistory();
        $browsingHistory->clear($_SESSION['user_id']);
        header('location:/BrowsingHistory/index');
    }

}