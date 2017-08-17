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
                        $sql = "SELECT * FROM users WHERE id=2";
                        $result = $database->query($sql);

                        $user = mysqli_fetch_array($result);
                        echo $user['first_name'];
                        ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>