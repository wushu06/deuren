<section class="gallery">
<div class="breadcrumbs-wrapper">
	<div class="container_12">
		<div class="grid_12">
			<nav class="breadcrumbs">
				<ul>
											<li class="home">
													<a href="<?php echo site_url(); ?>" title="Go to Home Page">Home</a>
																			<span>&#124;</span>
												</li>
											<li class="cms_page">
													<strong>Product Gallery</strong>
																		</li>
									</ul>
			</nav>  
		</div>
		<div class="clear"></div>   
	</div>
</div>
<div class="content-wrapper">
		<div class="new_cont">
				<div class="std"><div class="button-group filters-button-group">
	<button data-filter="*"><span>Show</span> All</button>
	<button data-filter=".internal">Internal <span>Doors</span></button>
	<button data-filter=".front">Front <span>Doors</span></button>
	<button data-filter=".garage">Garage <span>Doors</span></button>
</div>



<div class="grid">
<div class="grid-sizer"></div>

  	<?php 

		$images = theme('gallery');

		if( $images ): ?>
		
				<?php foreach( $images as $image ): ?>
				 <div class="element-item <?php echo $image['alt']; ?> " data-category="<?php echo $image['alt']; ?>">
					<a href="<?php echo $image['url']; ?>">
						 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</a>					 
				</div>			 
					   
						
				
				<?php endforeach; ?>
		
		<?php endif;?>
</div>



	
</div>
</div>  
  <div>
</div>


</section>



<script type="text/javascript">
jQuery(document).ready(function($) {	
	 
   // external js: isotope.pkgd.js

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
	masonry: {
			columnWidth: '.grid-sizer'
	}

	
});
// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};


// bind filter button click
$('.filters-button-group').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});



});




</script>