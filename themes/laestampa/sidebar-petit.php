<form class="searchform" >

	<input type="text" name="s" placeholder="Pesquisa...">

	<button><i class="fa fa-search" aria-hidden="true"></i></button>

</form>



<?php $current_cat = get_queried_object(); ?>

<?php //$current_cat = $current_cat instanceof WP_Term ? $current_cat : false ?>

<?php 


//$children = get_terms( 'taxonomy' => 'product_cat', 'hide_empty' => false, 'parent' => $current_cat->term_id ); 

//echo '<pre>' . print_r($current_cat->term_id,true) . '</pre>';exit();

/* if ( empty( $children ) ) {

	$children = get_terms( [ 'taxonomy' => 'product_cat', 'hide_empty' => false, 'parent' => $current_cat->parent ] ); 

}

*/

?>
	<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

	<input type="hidden" class="actual-url" value="<?php echo $actual_link; ?>"/>



<?php if ( $children ): 

	if ( $_GET && isset( $_GET['tid'] ) ):
		echo '<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h4>FILTROS</h4><ul class="product-categories">';
		$tid = $_GET['tid'];
		foreach($tid as $t):  $c = get_term( intval( $t ) ); ?>
		<li>
			<a class="remove-category-url" data-id="<?php echo $c->term_id; ?>" href="#">
				<?php $icon = 'http://petitpapier.com.br/wp-content/uploads/2017/12/erase-x.png'; ?>
				<img src="<?php echo $icon; ?>" style="margin-top: -4px; margin-right: 5px;">
				<?php echo $c->name; ?>
			</a>
		</li>

<?php endforeach; echo '</ul></div>'; endif; ?>

<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
	<h4>Produto</h4>
	<ul class="product-categories">

		<?php foreach($children as $c): ?>

		<li>
			<?php if ( is_int( stripos( $actual_link, '='.$c->term_id ) ) ) { ?>
				<a class="link-category active" data-id="<?php echo $c->term_id; ?>" href="#">
					<?php $icon = 'http://petitpapier.com.br/wp-content/uploads/2017/12/square-check-x.png'; ?>
					<img src="<?php echo $icon; ?>" style="margin-top: -4px; margin-right: 5px;">
					<?php echo $c->name; ?>
				</a>
			<?php } else { ?>
				<a class="link-category" data-id="<?php echo $c->term_id; ?>" href="#">
					<?php $icon = 'http://petitpapier.com.br/wp-content/uploads/2017/12/square-x.png'; ?>
					<img src="<?php echo $icon; ?>" style="margin-top: -4px; margin-right: 5px;">
					<?php echo $c->name; ?>
				</a>
			<?php } ?>
			
		</li>

		<?php endforeach; ?>

	</ul>



</div>

<?php endif; ?>



<?php dynamic_sidebar('widgetized-area'); ?>