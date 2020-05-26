<?php
include "users.class.php";

class getId extends Users
{
    public function getFullDetails($userID)
    {
        $user = $this->getUser($userID);
        return "<b>".$user['first_name']. " ". $user['last_name']. "</b></h4><br>".
         $user['city_name']. "<br>".
         str_replace(" ", "", $user['contact_number']) . "<br>".
         $user['email']. "<br>".
         "there's " . $user['tenants'] . " of them in total &".
         " looking for a ". $user['bedrooms']. " bedroom for up to £". $user['maximum_budget']."<br>".
         "they need to move by ". $user['move_by']. " primarily in <br>". $user['areas']."<br>".
         "they work ". $user['employment_status']. " as <b>". $user['job_title']."</b> - Total income: <b>£" .$user['salary']. "</b> a year <br>".
         "Claiming Housing Benefit:  <b>". $user['dss']. "</b> | Has Pets: <b>". $user['pets']."</b> | Has Children: <b>" . $user['children'] . "</b><br>".
         "<pre>".$user['special_conditions']. "</pre><br>".
         "<img src = 'img\glyphs\png\calendar-5.png' id='glyphs' alt='book a viewing'>".
         "<img src = 'img\glyphs\png\print.png' id='glyphs' alt='book a viewing'>".
         "<img src = 'img\glyphs\png\settings-6.png' id='glyphs' alt='book a viewing'>".
         "<img src = 'img\glyphs\png\garbage.png' id='glyphs' alt='book a viewing'>";
    }
}
$new_user = new getId();
echo $new_user->getFullDetails($_GET['id']);