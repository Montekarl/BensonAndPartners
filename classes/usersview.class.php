<?php

class UsersView extends Users
{
    public function showUser($userId)
    {
        $result = $this->getUser($userId);
        echo $result['first_name']. " ";
        echo $result['last_name']. "<br>";
        echo $result['city_name']. "<br>";
        echo str_replace(" ", "", $result['contact_number']) . "<br>";
        echo $result['email']. "<br>";
        echo "there's " . $result['tenants'] . " of them in total &";
        echo " looking for a ". $result['bedrooms']. " bedroom for up to £". $result['maximum_budget']."<br>";
        echo "they need to move by ". $result['move_by']. " primarily in <br>". $result['areas']."<br>";
        echo "they work ". $result['employment_status']. " as <b>". $result['job_title']."</b> - Total income: <b>£" .$result['salary']. "</b> a year <br>";
        echo "Claiming Housing Benefit:  <b>". $result['dss']. "</b> | Has Pets: <b>". $result['pets']."</b> | Has Children: <b>" . $result['children'] . "</b><br>";
        echo "<pre>".$result['special_conditions']. "<br></pre>";
    }

    public function showUsers()
    {
        foreach ($this->getUsers() as $data)
        {
            echo
                "<tr>".
                "<td></td>".
                "<td></td>".
                "<td> <button type = 'button' onclick='showMoreDetailsSideBar(".$data['user_id'].")' class = 'find-id'> + </button> "."</td>".
                "<td class = 'id'>".$data['user_id']."</td>".
                "<td>".$data['title']." ".$data['first_name']." ".$data['last_name']."</td>".
                "<td>".$data['email']."</td>".
                "<td>".$data['contact_number']."</td>".
                "<td>".$data['bedrooms']."</td>".
                "<td>".$data['maximum_budget']."</td>".
                "<td>".$data['salary']."</td>".
                "</tr>";
        }
    }

    public function LastInsertedID()
    {
        $ID = $this->getLatestUserID();
        return $value = array_shift($ID);
    }
}


