<?php

class UsersModel extends ModelBase
{
    public function index()
    {
        $users = Repository::users();
        $this->viewModel->set('users', $users);
        return $this->viewModel;
    }

    public function details()
    {
        $user = Repository::user($this->GET->id);
        if ($user == NULL) {
            // No one has been found in the database with this id.
            // TODO: Redirect user to 404 NOT FOUND
        }
        $this->viewModel->set('user', $user);
        return $this->viewModel;
    }
}

?>