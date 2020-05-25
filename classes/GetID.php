<?php
include "users.class.php";

class GetID extends Users
{
    public function index($userID)
    {
        $user = $this->getUser($userID);
        return $user['first_name'] ." ". $user['last_name'];
    }
}
$new_user = new GetID();

echo $new_user->index($_GET['id']);