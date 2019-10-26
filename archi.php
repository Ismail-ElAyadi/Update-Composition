<!-- Template Name: archi-page -->
<?php wp_head(); ?>

<?php get_header(); ?>

<!-- div background black  -->

<div class="bg-black-top"></div>
<!--Diaporama -->



<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="carousel slide" id="carousel-310860">

				<div class="carousel-inner carousel-top">
                <div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="<?php the_field('diaporama_archi_firstpic')?>" />
						<div class="carousel-caption info-carousel">
							<h4 class = "info-carousel-titre">
                            <?php the_field('diaporama_archi_titre_premiere_diapo')?>
							</h4>
						<a class = "info-carousel-ss-titre" href="<?php the_field('diaporama_archi_url_premire_image')?>">
						Voir le projet <div class="fleche-projet"></div>
					</a>
						</div>
					</div>
<?php

// check if the repeater field has rows of data
if( have_rows('diaporama_archi_tamre') ):

 	// loop through the rows of data
    while ( have_rows('diaporama_archi_tamre') ) : the_row();?>



					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="  <?php the_sub_field('image'); ?> " />
						<div class="carousel-caption info-carousel">
							<h4 class = "info-carousel-titre">
                            <?php the_sub_field('titre_image'); ?>
							</h4>
						    <a  class = "info-carousel-ss-titre"  href=" <?php the_sub_field('liens_projets'); ?> ">
                            Voir le projet <div class="fleche-projet"></div>
							</a>
						</div>
					</div>



<?php
endwhile;

else :

    // no rows found

endif;


?>
	</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carousel-310860" data-slide="prev"><div class="prev-arrow bg-white-arrow"></div></a> <a class="carousel-control-next" href="#carousel-310860" data-slide="next"><div class="next-arrow bg-white-arrow"></div></a>
	</div>
</div>




<!--Etude ARchi -->
<!--Partie Gauche -->
<div class="container-fluid etude-archi">
    <div class="col-md-4 offset-2 etude-archi-g">
        <h1><?php the_field('etude_archi_titre_archi') ?></h1>
        <h5><?php the_field('etude_archi_ss-titre_archi') ?></h5>
        <div><?php the_field('etude_archi_wysiwyg_archi') ?></div>
    </div>
	<!--Partie Droite -->
	<div class="etude-archi-d" >
<p>Nous vous aidons à définir une ambiance et à décrire l’espace :</p>
		<ul>
			<?php

			// check if the repeater field has rows of data
			if( have_rows('etude_archi_reapeater_archi') ):

				// loop through the rows of data
				while ( have_rows('etude_archi_reapeater_archi') ) : the_row();?>


					<li> <?php the_sub_field('texte_reapeater_archi'); ?></li>

					<?php  endwhile;

			else :

				// no rows found

			endif;

			?>
		</ul>
	</div>
</div>

<!--Nghi & Stephan -->
<div class="div-nghi-steph offset-2">
<img class="img-nghi" src="<?php the_field('nghi_&_stephan_archi_photo_n&s') ?>" alt="">
<div class ="repeater-nghi">
	<h1><?php the_field('nghi_&_stephan_archi_titre_nghi_&_stephan_archi')?></h1>
	<h5><?php the_field('nghi_&_stephan_archi_ss-titre_nghi_&_stephan_archi')?></h5>
	<?php the_field('nghi_&_stephan_archi_wysiwyg_nghi&stephan_archi') ?>
</div>

</div>

<!-- Diaporama bas de page  -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="carousel slide" id="carousel-972604">
				<div class="carousel-inner carousel-bot">
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="<?php the_field('diaporama_bas_de_page_firstpic')?>" />

					</div>
<?php

if( have_rows('diaporama_bas_de_page_tamre') ):


    while ( have_rows('diaporama_bas_de_page_tamre') ) : the_row();?>
	<div class="carousel-item">
	<img class="d-block w-100" alt="Carousel Bootstrap Second" src="<?php the_sub_field('image'); ?>" />
	</div>

		<?php  endwhile;

else :
endif;

?>
	 <a class="carousel-control-prev" href="#carousel-972604" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-972604" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>
</div>

<!-- Tissus et artisanat  -->
<div class=" offset-2 tissus-artisanat">
<div class="tissu-g">
	<h1><?php the_field('tissus_titre'); ?></h1>
	<h2><?php the_field('tissus_ss-titre_tissu'); ?></h2>
	<div><?php the_field('tissus_wysiwyg_tissu'); ?></div>
</div>
<div class="tissus-d" >
<p>Travail selon les méthodes artisanales :</p>
		<ul>
			<?php

			// check if the repeater field has rows of data
			if( have_rows('tissus_repeater_tissus_et_artisanat_archi') ):

				// loop through the rows of data
				while ( have_rows('tissus_repeater_tissus_et_artisanat_archi') ) : the_row();?>


					<li> <?php the_sub_field('repeater_list_droite'); ?></li>

					<?php  endwhile;

			else :

				// no rows found

			endif;

			?>
		</ul>
	</div>
</div>
</div>