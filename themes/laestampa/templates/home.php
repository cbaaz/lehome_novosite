<?php 


/*
	Template Name: Página Home
*/

get_header();

$imagem_banner1 = get_template_directory_uri().'/assets/images/banner-home.jpg';
$imagem_banner2 = get_template_directory_uri().'/assets/images/banner_1.jpg';

?>
</div>
<div class="container-fluid console_slide">
	<div class="row ">
		<div class="bxsliderHome">
		  <div><img src="<?php echo $imagem_banner1; ?>"></div>
		  <div><img src="<?php echo $imagem_banner2; ?>"></div>
		</div>

	</div>	
</div>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="chamada-home text-center">
				<h2> Estimulamos novas formas de expressão e comportamento na decoração.</h2>
			</div>
		</div>
	</div>
</div>	
<div class="container-fluid limit-width">
	<div class="row rowBtn-compra-home">
			<div class="col-12 col-md-6 noPadding-left">
				<a href="#" class="box_bannerBtn" title="Compre Agora">
					<div class="col-estampados">						
						<div class="title-banner">
							<h3>Tecidos <br> Estampados </h3>
							<div class="btnBanner-comprar">
								Compre agora
							</div>
						</div>							
					</div>
				</a>
			</div>
			<div class="col-12 col-md-6 noPadding-right">
				<a href="#" class="box_bannerBtn" title="Compre Agora">
					<div class="col-papel">						
							<div class="title-banner">
								<h3>Papel <br> de Parede </h3>
								<div class="btnBanner-comprar">
									Compre agora
								</div>
							</div>							
					</div>
				</a>
			</div>
	</div>
</div>

<div class="container-fluid primeira_linha limit-width">
	<div class="row rowLine1-desenhos">
			<div class="col-12 col-md-6 noPadding-left">
				<div class="item_categoriaHome">
				<a href="#" class="line_linkBox" title="Categoria Estampados">
					<div class="mascara_banner">
						<h3 class="text-center"> Tecidos <br/> Estampados </h3>
					</div>
				</a>
					<img src="<?php echo get_template_directory_uri().'/assets/images/home/line1_colun1.jpg' ?>" alt="" />
				</div>	
			</div>
			<div class="col-12 col-md-6 noPadding-right">
				<div class="item_categoriaHome">
					<a href="#" class="line_linkBox" title="Categoria Estampados">
						<div class="mascara_banner">
							<h3 class="text-center"> Papel <br/> de Parede </h3>
						</div>
					</a>
						<img src="<?php echo get_template_directory_uri().'/assets/images/home/line1_colun2.jpg' ?>" alt="" />
				</div>
				<div class="item_categoriaHome">
					<h4>
						Estimulamos novas formas de <strong>expressão e comportamento</strong> na decoração. <strong>Estimulamos</strong> novas formas <strong>de decoração</strong>.
					</h4>
				</div>
			</div>
	</div>
</div>

<div class="container-fluid segunda_linha limit-width">
	<div class="row rowLine1-desenhos">
			<div class="col-12 col-md-6 noPadding-left">
				<div class="item_categoriaHome">
				<a href="#" class="line_linkBox" title="Categoria Estampados">
					<div class="mascara_banner">
						<h3 class="text-center"> Tecidos <br/> Geométricos </h3>
					</div>
				</a>
					<img src="<?php echo get_template_directory_uri().'/assets/images/home/line2_colun1.jpg' ?>" alt="" />
				</div>	
			</div>
			<div class="col-12 col-md-6 noPadding-right">
				<div class="item_categoriaHome">
					<a href="#" class="line_linkBox" title="Categoria Estampados">
						<div class="mascara_banner">
							<h3 class="text-center"> Papel de Parede <br/> Estampados </h3>
						</div>
					</a>
						<img src="<?php echo get_template_directory_uri().'/assets/images/home/line2_colun2.jpg' ?>" alt="" />
				</div>
			</div>
	</div>
</div>

<div class="container">
<?php
get_footer();

