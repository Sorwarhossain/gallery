<?php include("includes/header.php"); ?>
    <?php if(!$session->is_signed_in()){redirect('login.php');} ?>

<?php


$user = new User();
$message = '';
if(isset($_POST['create']) && $user){
    
    $user->username           = $_POST['username'];
    $user->first_name         = $_POST['first_name'];
    $user->last_name          = $_POST['last_name'];
    $user->password           = $_POST['password'];

    $user->set_file($_FILES['user_image']);

    if($user->save_user()){
        $message = "User added successfully!";
    } else {
        $message = join('<br>', $photo->errors);
    }
}  




?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->

            <?php include('includes/top_nav.php'); ?>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include('includes/sidebar_nav.php'); ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add User Page
                            <small>Subheading</small>
                        </h1>
                        
                        <div class="col-md-12">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="col-md-6 col-md-offset-3">
                                    <?php echo $message; ?>
                                    <div class="fomr-group">
                                        <label for="title">Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div><br>
                                    <div class="fomr-group">
                                        <label for="caption">First Name</label>
                                        <input type="text" name="first_name" class="form-control">
                                    </div><br>
                                    <div class="fomr-group">
                                        <label for="alternate_text">Last Name</label>
                                        <input type="text" name="last_name" class="form-control">
                                    </div><br>
                                    <div class="fomr-group">
                                        <label for="alternate_text">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div><br>
                                    <div class="fomr-group">
                                        <input type="file" name="user_image" class="form-control">
                                    </div><br> 
                                    <div class="fomr-group">
                                        <input type="submit" name="create" class="btn btn-primary pull-right" value="Create User">
                                    </div>
                                </div> <!-- end of col-md-8 -->
                            </form>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>