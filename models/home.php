<?php

class HomeModel extends ModelBase
{
    public function index()
    {   
        $stats = Repository::stats();
        $users = Repository::latestUsers();
        $this->viewModel->set('stats', $stats);
        $this->viewModel->set('users', $users);
        return $this->viewModel;
    }
}

?>
