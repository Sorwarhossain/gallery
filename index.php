<?php include("includes/header.php"); ?>


        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">

    			<div class="row thumbnails">
					<?php 
					$photos = Photo::find_all();
					foreach($photos as $photo) :
					?>

	    				<div class="col-sm-6 col-md-3">
	    					<h1>Hello Image</h1>
	    					<a class="thumbnail" href="photo.php?id=<?php echo $photo->id; ?>">
	    						<img class="img-responsive" src="<?php echo $photo->photo_path(); ?>" alt="">
	    					</a>
	    				</div>

	    			<?php endforeach; ?>
    			</div>
            
          
         

            </div>




            <!-- Blog Sidebar Widgets Column -->
            
            <?php //include("includes/sidebar.php"); ?>



        </div>
        <!-- /.row -->

        <?php include("includes/footer.php"); ?>
