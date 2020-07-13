<?php

if (!empty($_POST['onthemarket'])){
    preg_match('/Name:(.*?);/', $_POST['onthemarket'], $match);
    $name = $match[1];
    $fname=explode(' ', $name);
    preg_match('/Address:(.*?);/', $_POST['onthemarket'], $address);
    preg_match('/Email:(.*?);/', $_POST['onthemarket'], $email);
    preg_match('/Phone:(.*?);/', $_POST['onthemarket'], $contact_number);
    preg_match('/Comments:(.*?);/', $_POST['onthemarket'], $comments);

}
if(!empty($_POST['rightmove'])){
    preg_match('/name:(.*?);/', $_POST['rightmove'], $match);
    $name = $match[1];
    $fname=explode(' ', $name);
    preg_match('/Address:(.*?);/', $_POST['rightmove'], $address);
    preg_match('/Email:(.*?);/', $_POST['rightmove'], $email);
    preg_match('/Phone:(.*?);/', $_POST['rightmove'], $contact_number);
    preg_match('/Requirements:(.*?);/', $_POST['rightmove'], $comments);
    preg_match('/PropDescription:(.*?);/', $_POST['rightmove'], $PropDescription);
    preg_match('/PropPrice:(.*?);/', $_POST['rightmove'], $maximum_budget);

}
if(!empty($_POST['zoopla'])){
    preg_match('/Name:	  (.*?)           Telephone:/', $_POST['zoopla'], $match);
    $name = $match[1];
    $fname=explode(' ', $name);
    preg_match('/Address:(.*?)           Telephone:/', $_POST['zoopla'], $address);
    preg_match('/Email:(.*?)Type of enquiry:/', $_POST['zoopla'], $email);
    preg_match('/Telephone:	  (.*?)           Email:/', $_POST['zoopla'], $contact_number);
    preg_match('/Price range:(.*?)per month/', $_POST['zoopla'], $comments);
    preg_match('/Message:(.*?)Location:/', $_POST['zoopla'], $comments);

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <title>Lettings Applicants</title>
    <link rel="shortcut icon" href="https://image.flaticon.com/icons/png/512/37/37502.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Database - Add Applicant</title>

</head>

<body>

<form method="post">
    <div class ="container" style="width:900px;">
        <div class="table-responsive">
            <div class="search-table-outter wrapper">
                <table>
                    <form action="?" method="POST"> <!--?means to send to same page-->
                        <input type="text" name="onthemarket" placeholder="onthemarket + rightmove" size="50px" style="text-align: left; margin-top: 50px"/>
                        <input type="submit" value="extract" style="text-align: left" /><br>
                        <input type="text" name="zoopla" placeholder="zoopla" size="50px" style="text-align: left" />
                        <input type="submit" value="extract" style="text-align: left" /><br>
                    </form>
                </table>
                <table class="table table-bordered;" style="width:700px">

                    <tr>
                        <th scope="col" colspan=3>Personal Details</th>

                    </tr>
                    <tr>
                        <?php
                        $title = $first_name = $last_name = false;

                        if(!empty($fname)){
                            $name_size = sizeof($fname);
                            if ($name_size == 1) {
                                $first_name = $fname[0];
                            } elseif ($name_size == 2) {
                                $first_name = $fname[0];
                                $last_name = $fname[1];
                            } elseif ($name_size == 3) {
                                $first_name = $fname[1];
                                $last_name = $fname[2];
                            }elseif ($name_size == 4) {
                                $title = $fname[0];
                                $first_name = $fname[1]." ".$fname[2];
                                $last_name = $fname[3];
                            }elseif ($name_size == 5) {
                                $title = $fname[0];
                                $first_name = $fname[1]." ".$fname[2]." ".$fname[3];
                                $last_name = $fname[4];
                            }elseif ($name_size == 6) {
                                $title = $fname[0];
                                $first_name = $fname[1]." ".$fname[2]." ".$fname[3]." ".$fname[4];
                                $last_name = $fname[5];
                            }elseif ($name_size == 7) {
                                $title = $fname[0];
                                $first_name = $fname[1]." ".$fname[2]." ".$fname[3]." ".$fname[4]." ".$fname[5];
                                $last_name = $fname[6];

                            }
                        }
                        ?>
                        <td>
                            Title:<br/><input name="title" class="form-control" value="<?php echo $title; ?>"/>
                        </td>
                        <td>
                            First Name:<br/><input name="first_name" class="form-control" value="<?php echo $first_name; ?>"/>
                        </td>
                        <td>
                            Last Name:<br/><input name="last_name" class="form-control" value="<?php echo $last_name; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            if(!empty($email)){
                                echo "Email: <input type='text' name='email' class='form-control' value='$email[1]'/><br>";
                            }else{
                                echo "Email: <input type='text' name='email' class='form-control'/><br>";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if(!empty($contact_number)){
                                echo "Contact Number: <input type='text' name='contact_number' class='form-control' value='$contact_number[1]'/><br>";
                            }else{
                                echo "Contact Number: <input type='text' name='contact_number' class='form-control' /><br>";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if(!empty($address)){
                                echo "Address: <input type='text' name='address' class='form-control' value='$address[1]'/><br>";
                            }else{
                                echo "Address: <input type='text' name='address' class='form-control' /><br>";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th colspan=3>Enquiry Details</th>
                    </tr>
                    <tr>
                        <td>
                            How Many Bedrooms?
                            <select name="bedrooms" class="form-control"/>
                            <option></option>
                            <option value="room">Room</option>
                            <option value="bedsit">Bedsit</option>
                            <option value="studio">Studio</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            </select>
                        </td>
                        <td>
                            How Many Tenants?
                            <select name="tenants" class="form-control" />
                            <option></option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            </select>
                        </td>

                        <td>
                            Children?
                            <select name="children" class="form-control" />
                            <option>None</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            </select>
                        </td>
                    <tr>
                        <td>
                            <?php
                            if(!empty($maximum_budget)){
                                echo "Max Budget: <input type='text' name='maximum_budget' class='form-control' value='$maximum_budget[0]'/><br>";
                            }else{
                                echo "Max Budget: <input type='text' name='maximum_budget' class='form-control' /><br>";
                            }
                            ?>
                        </td>

                        <td>
                            Move By:
                            <input type="date" name="move_by" class="form-control">
                        </td>

                        <td>Furniture:
                            <select name="furniture" class="form-control">
                                <option></option>
                                <option>Furnished</option>
                                <option>Unfurnished</option>
                                <option>Partly Furnished</option>
                                <option>Flexible</option>
                            </select>
                        </td>

                    <tr>
                        <th colspan="3">
                            Applicants' Position
                        </th>
                    </tr>

                    <tr>
                        <td>
                            Employment Status:
                            <select name="employment_status" class="form-control">
                                <option></option>
                                <option>Full Time</option>
                                <option>Part Time</option>
                                <option>Unemployed</option>
                            </select>
                        </td>

                        <td>
                            Job Title:
                            <input type="text" name="job_title" class="form-control" />
                        </td>

                        <td>
                            Applicant Income:
                            <input type="text" name="salary" placeholder="£" class="form-control" />
                        </td>

                    <tr>
                        <td>
                            Lenght of Tenancy Planned:
                            <select name="lease" class="form-control">
                                <option></option>

                                <option>6 months</option>
                                <option>1 year</option>
                                <option>2 years</option>
                                <option>3 years</option>
                                <option>4 years</option>
                                <option>5+</option>
                            </select>
                        </td>

                        <td>Pets:
                            <select name="pets" class="form-control">
                                <option></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </td>

                        <td>DSS:
                            <select name="dss" class="form-control">
                                <option></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th colspan="3">Area(s)</th>
                    </tr>
                    <td>
                        <label>
                            <input type="checkbox" name="areas[]" value="Anerley"> Addington</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Anerley"> Anerley</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Beckenham"> Beckenham</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Beddington"> Beddington</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Bromley"> Bromley</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Catford"> Catford</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Chipstead"> Chipstead</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Croydon"> Croydon</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Crystal Palace"> Crystal Palace</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="East Croydon"> East Croydon</label>
                        <br>
                    <td>
                        <label>
                            <input type="checkbox" name="areas[]" value="Forest Hill"> Forest Hill</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Mitcham"> Mitcham</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Norbury"> Norbury</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Penge"> Penge</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Purley"> Purley</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Sanderstead"> Sanderstead</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Selhurst"> Selhurst</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="South Croydon"> South Croydon</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="South Norwood"> South Norwood</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Streatham"> Streatham</label>
                        <br>
                    <td>
                        <label>
                            <input type="checkbox" name="areas[]" value="Sutton"> Sutton</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Sydenham"> Sydenham</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Thornton Heath"> Thornton Heath</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Tooting"> Tooting</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Upper Norwood"> Upper Norwood</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="West Croydon"> West Croydon</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="West Wickham"> West Wickham</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="Addiscombe"> Addiscombe</label>
                        <br>
                        <label>
                            <input type="checkbox" name="areas[]" value="other"> Other</label>
                        <br>
                        </select>
                    </td>
                    <tr>
                        <td colspan=3> Special Conditions:
                            <?php
                            if(!empty($comments)){
                                echo "<textarea width='100%' rows='20' cols='40' id='special_conditions' name='special_conditions' placeholder='Special Conditions' class='form-control' style='width: 100%;height: 300px;'>Comments: $comments[1]</textarea>";
                            } else {
                                echo "<textarea width='100%' rows='20' cols='40' id='special_conditions' name='special_conditions' placeholder='Special Conditions' class='form-control' style='width: 100%;height: 300px;'></textarea>";
                            }
                            ?>
                        </td>
                    </tr>


                </table>
                
                <button type="submit" name="btn-save" class="form-control" style="background-color: goldenrod;">
                    <strong style="color:indigo">
                        SAVE
                    </strong>
                </button>

</form>
</body>

</html>