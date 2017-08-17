            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Page
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                        <?php 

                     /*   $result_set = User::find_all_user();
                        while($row = mysqli_fetch_array($result_set)){
                            echo $row['first_name'] . ' ' . $row['last_name'] . "<br>";
                        }*/



                      /*  $found = User::find_user_by_id(1);
                        $user = User::instantiation($found);

                        echo $user->first_name;*/

                        $users = User::find_all_user();
                        foreach($users as $user){
                            echo $user->first_name . "<br>";
                        }
                       /* $user = User::find_user_by_id(1);

                        echo $user->first_name;*/
                        ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>