<?php include("includes/header.php"); ?>
    <?php if(!$session->is_signed_in()){redirect('login.php');} ?>
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
                            Comments Page
                        </h1>
                        <div class="col-md-12">
                            <?php 
                            $comments = Comment::find_all();

                            ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Photo ID</th>
                                        <th>Author</th>
                                        <th>Comment Body</th>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($comments as $comment) : ?>
                                    <tr>
                                        <td><?php echo $comment->id; ?></td>
                                        <td><?php echo $comment->photo_id; ?></td>
                                        <td><?php echo $comment->author; ?></td>
                                        <td><?php echo $comment->body; ?></td>
                                        <td>
                                            <div class="action_links">
                                                <a class="btn btn-danger" href="delete_comment.php?id=<?php echo $comment->id; ?>">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>