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


                       /* $users = User::find_all();
                        foreach($users as $user){
                            echo $user->first_name . "<br>";
                        }*/
                        /*$users = User::find_by_id(1);
                        echo $users->first_name;*/
                       /* $user = User::find_user_by_id(1);

                        echo $user->first_name;*/
                        ?>

                        <?php 
                        /*    $user = User::find_user_by_id(9);
                            $user->password     = "123456";

                            $user->save();*/
                        ?>

                        <?php 
                           /* $user = User::find_user_by_id(3);
                            $user->last_name = 'Something';
                            $user->update();*/
                        ?>

                        <?php 
                        //$user = User::find_user_by_id(2); 
                        //$user = new User();  
                        //$user->delete();


                       /* $photo = Photo::find_all();
                        echo var_dump($photo);*/

                        // $photo = new Photo();
                        // $photo->title = "Another Photo";
                        // $photo->type = "Image";
/*
                        $user = new User();
                        $user->username = 'Sumon Ahmed';
                        $user->password = 'pass';

                        $photo->create();*/

                        

                        $photos = Photo::find_all();
                        foreach($photos as $photo){
                            echo $photo->title . "<br>";
                        }
                       
                        /*$photo = new Photo();
                        $photo->title = 'The Mountain Photo';
                        $photo->description = 'This is a test description';
                        $photo->filename = 'test.jpg';
                        $photo->type = 'jpg';
                        $photo->size = '100';

                        $photo->create();

*/
?>

                    </div>
                </div>
                <!-- /.row -->

            </div>