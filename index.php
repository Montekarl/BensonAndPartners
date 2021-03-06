<?php
    include 'includes/autoloader.inc.php';
    include 'style/style.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php include_once "includes/header.php" ?>
        <div class="container-fluid text-center">
            <div class="row content">
<!--                <div class="col-sm-2 sidenav">-->
<!--                    <p><a href="#">Link</a></p>-->
<!--                    <p><a href="#">Link</a></p>-->
<!--                    <p><a href="#">Link</a></p>-->
<!--                </div>-->
                <div class="col-sm-8 text-left">
                    <h3>Lettings Users</h3>

                    <hr>
                        <table class="table table-bordered table-hover" style="width:100%;" id="example">
                            <thead>
                            <tr>
                                <th><img src="http://www.myiconfinder.com/uploads/iconsets/256-256-924590246403a197a00e4a64c3e46da4-accept.png" style="width:22px; height:22px"></th>
                                <th><img src="https://cdn3.iconfinder.com/data/icons/office-set-pack-1/512/12-512.png" style="width:20px; height:20px"></th>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th style="width: 200px;">Email</th>
                                <th>Contact No</th>
                                <th>Bedrooms</th>
                                <th>Max Budget</th>
                                <th>Income</th>
                                <th style="display:none">Special Conditions</th>

                            </tr>
                            </thead>
                            <tbody>
                                <?php
//                                $getAllUsers = new LettingsUsers();
//                                $getAllUsers->getAllLettingsUsers();
                                    $getAllUsers = new UsersView();
                                    $getAllUsers->showUsers();
                                ?>
                            </tbody>
                        </table>
                </div>
                <div class="col-sm-4 sidenav" style="margin-top: 87px">
                    <div id="getinfo">
                    </div>

                    <?php include "scripts/scripts.php"; ?>

                    <div id="detailed-SideBar">
                        <p><b>Applicant Details</b></p>

                        <?php
                            $getLatestUser = new UsersView();
                            $getLatestUser->showUser($getLatestUser->LastInsertedID());
                            $getLatestUser->showButtons($getLatestUser->LastInsertedID());

                            $setUser = new UsersController();

                            if(isset($_POST['btn-save']))
                            {
                                $setUser->createUser($_POST['title'],$_POST['first_name'],$_POST['last_name'],$_POST['city_name'],$_POST['email'],$_POST['bedrooms'],$_POST['tenants'],$_POST['furniture'],$_POST['maximum_budget'],$_POST['contact_number'],$_POST['move_by'],'',$_POST['employment_status'],$_POST['job_title'],$_POST['salary'],$_POST['lease'],$_POST['special_conditions'],$_POST['dss'],$_POST['pets'],$_POST['children']);
                            }



                        ?>

                    </div>

                </div>
            </div>
        </div>

        <footer class="container-fluid text-center">
            <p>Benson and Partners Limited</p>
        </footer>
    </body>
</html>
