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


                        $users = User::find_all_user();
                        foreach($users as $user){
                            echo $user->first_name . "<br>";
                        }
                       /* $user = User::find_user_by_id(1);

                        echo $user->first_name;*/
                        ?>

                        <?php 
                        /*    $user = new User();
                            $user->username     = "sumialam";
                            $user->password     = "sumi";
                            $user->first_name   = "Sumi";
                            $user->last_name    = "Alam";

                            $user->create();*/
                        ?>

                        <?php 
                           /* $user = User::find_user_by_id(3);
                            $user->last_name = 'Something';
                            $user->update();*/
                        ?>

                        <?php 
                        $user = User::find_user_by_id(3);    
                        $user->delete();
                        ?>


                    </div>
                </div>
                <!-- /.row -->

            </div>