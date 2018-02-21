<?php

class BlockController extends BaseController
{    
    public function __construct($action, $urlValues) {
        parent::__construct($action, $urlValues);
    }

    protected function index()
    {
        $id = $this->GET->id;
        $user = $this->database->query('SELECT * FROM Charity.User WHERE ID = ?', array($id))->first();
        if ($user->Blocked == 0) {
            $this->database->query('UPDATE Charity.User SET Blocked = 1 WHERE ID = ?', array($id));
        } else {
            $this->database->query('UPDATE Charity.User SET Blocked = 0 WHERE ID = ?', array($id));
        }
        $this->response->redirectExternal('http://orgintsys.tk/users/details/' . $id);
    }
}

?>
