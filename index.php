<?php include("includes/header.php"); ?>

<?php
$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$items_per_page = 4;
$total_item = Photo::count_record();

$pagination = new Pagination($page, $items_per_page, $total_item);
$sql = "SELECT * FROM photos LIMIT {$items_per_page} OFFSET {$pagination->offset()}";

$photos = Photo::find_by_query($sql);

?>


        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">

    			<div class="row thumbnails">
					<?php 
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
            	<?php if($pagination->total_page() > 1) :	?>
          		<div class="spacing-40"></div>

          		<div class="row">
					<div class="col-md-12">
						<ul class="pager">
						<?php 
						if($pagination->has_next()){
							echo '<li class="next"><a href="index.php?page='. $pagination->next() .'">Next</a></li>';
						} ?>

						<?php 
						for($i = 1; $i <= $pagination->total_page(); $i++){
							if($i == $pagination->current_page){
								echo '<li class="active"><a href="index.php?page='. $i .'">'. $i .'</a></li>';
							} else {
								echo '<li><a href="index.php?page='. $i .'">'. $i .'</a></li>';
							}
						}
						?>


						<?php if($pagination->has_previous()){
							echo '<li class="previous"><a href="index.php?page='. $pagination->previous() .'">Previous</a></li>';
						}

						?>
						</ul>
					</div>
          		</div>
          		<?php endif; ?>

            </div>




            <!-- Blog Sidebar Widgets Column -->
            
            <?php //include("includes/sidebar.php"); ?>



        </div>
        <!-- /.row -->





        <?php include("includes/footer.php"); ?>
