<div class="single-galerien_content fullPageElement flexed_center puffer-both-xxl margin-top-mobile" id="the_gallery_wrapper">
	<div class="container">
		<!-- Gallery Overview -->
		<div class="row gap-bottom-md">
			<div class="col-md-12">
				<div class="gallery_wrapper">
				<?php foreach(get_field('galerie_verwalten') as $image):?>
					<img src="<?php echo $image['url'];?>" alt="<?php the_title();?>">
				<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
</div>