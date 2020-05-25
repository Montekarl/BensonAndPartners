<?php
include "users.class.php";

class getId extends Users
{
    public function getFullDetails($userID)
    {
        $user = $this->getUser($userID);
        return $user['title'] ." ". $user['first_name'] ." ". $user['last_name']."<br>".$user['email']
        ."<br>".$user['contact_number'];
    }
}
$new_user = new getId();
echo $new_user->getFullDetails($_GET['id']);