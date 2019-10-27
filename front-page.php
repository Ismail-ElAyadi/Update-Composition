<!--
Template name: front-page
-->

<?php wp_head(); ?>

<?php get_header(); ?>

<!-- Partie bandeau -->

<section id="container-top">
  <!--Partie gauche bandeau-->

  <article id="left-article-bandeau">
    <img
      class="image-bandeau"
      src="<?php echo get_field('bandeau_image_g_bandeau')['sizes']['my-custom-size']; ?>"
    />

    <div id="left-text-bandeau">
    <h3 class="sous-titre-left"><?php the_field('bandeau_titre_g_bandeau') ?></h3>
    <a href="#"><img id="button-left" src="<?php echo get_template_directory_uri(); ?>/assets/svg/fleche-droite.svg" alt=""></a>

    <div class="hover-bandeau-left">
      <h3 class="sous-titre-hover">
        <?php the_field('bandeau_survol_g_titre1_survol_bandeau') ?>
      </h3>
      <p class="paragraph-hover">
        <?php the_field('bandeau_survol_g_texte_g_bandeau') ?>
      </p>

      <?php 
  $group = get_field('bandeau_btn_g_bandeau');

  if($group['title_g_bandeau']) :

  $url = $group['url_bandeau_g'];
  $target = 'target="_blank" rel="noopener"';

  if( $group['choice_bandeau_g'] == 'page_link_bandeau_g' ) {
      $url = $group['page_link_bandeau_g'];
      $target = '';
  } ?>

      <a id="lien-bandeau-left" href="<?php echo $url ?>" <?php echo $target; ?>
        >
        
        <div class="icon-container">
        <p class="p-hover"><?php echo $group['title_g_bandeau']; ?></p>
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/svg/Group 1300.svg"
          />
          </div>
        </div>
      </a>

      <?php endif; ?>
      
    </div>
  </article>

  <!--Partie droite bandeau-->

  <article id="right-article-bandeau">
    <img
      class="image-bandeau"
      src="<?php echo get_field('bandeau_image_d_bandeau')['sizes']['my-custom-size']; ?>"
    />
    <div id="right-text-bandeau">
    <h3 class="sous-titre-right"><?php the_field('bandeau_titre_d_bandeau') ?></h3>
    <a href="#"><img id="button-right" src="<?php echo get_template_directory_uri(); ?>/assets/svg/fleche-droite.svg" alt=""></a>

    <div class="hover-bandeau-right">
      <h3 class="sous-titre-hover">
        <?php the_field('bandeau_survol_d_bandeau_titre_bandeau_d') ?>
      </h3>
      <p class="paragraph-hover">
        <?php the_field('bandeau_survol_d_bandeau_texte_d_bandeau') ?>
      </p>

      <?php 
  $group2 = get_field('bandeau_btn_d_bandeau');

  if($group2['title_d_bandeau']) :

  $url2 = $group2['url_bandeau_d'];
  $target2 = 'target="_blank" rel="noopener"';

  if( $group2['choice_bandeau_d'] == 'pagelink_bandeau_d' ) {
      $url2 = $group2['pagelink_bandeau_d'];
      $target2 = '';
  } ?>
      <a id="lien-bandeau-right" href="<?php echo $url2 ?>" <?php echo $target2; ?>
        >
        <p class="p-hover"><?php echo $group2['title_d_bandeau']; ?></p>
        <div class="icon-bandeau-right">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/svg/Group 1300.svg"
          />
        </div>
      </a>

      <?php endif; ?>
    </div>
    </div>
  </article>
</section>

<!--Partie intro -->

<section id="intro-container">
  <!--Partie de gauche intro -->

  <article id="front-intro-text">
    <div id="intro-first-text">
    <p class="text"><?php the_field('intro_txt-gauche-intro') ?></p>
    </div>

    <div id="intro-second-text">

    <h2 class="sous-titre-intro"><?php the_field('intro_titre_gauche_intro') ?></h2>

    <p class="text"><?php the_field('intro_wysiwyg_intro_gauche') ?></p>

    <?php 
  $group3 = get_field('intro_bouton_intro');

  if($group3['titre_intro']) :

  $url3 = $group3['url_intro'];
  $target3 = 'target="_blank" rel="noopener"';

  if( $group3['choice_intro'] == 'page_link_intro' ) {
      $url3 = $group3['page_link_intro'];
      $target3 = '';
  } ?>

    <a class="lien" href="<?php echo $url3 ?>" <?php echo $target3; ?>
      >
      <p class="p-hover"><?php echo $group3['titre_intro']; ?></p>
      <div class="icon-container">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/svg/Group 1300.svg"
        />
      </div>
    </a>

    <?php endif; ?>
    </div>
  </article>

  <!-- Partie de droite intro -->

  <article id="front-intro-right">
    <img
      class="image-intro"
      src="<?php echo get_field('intro_image_droite_intro')['sizes']['my-custom-size']; ?>"
    />
  </article>
</section>

<!-- Fin intro -->

<!-- Partie du milieu -->

<section id="middle-container">

<div id="grey-div"></div>

<div id="all-text-tissus">
  <img
    src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-small.svg"
  />

  <h1 class="title"><?php the_field('milieu_txt-milieu') ?></h1>

  <?php 
  $group4 = get_field('milieu_bouton_milieu');

  if($group4['titre_milieu']) :

  $url4 = $group4['url_milieu'];
  $target4 = 'target="_blank" rel="noopener"';

  if( $group4['choice_milieu'] == 'page_link_milieu' ) {
      $url4 = $group4['page_link_milieu'];
      $target4 = '';
  } ?>

  <a class="lien" href="<?php echo $url4 ?>" <?php echo $target4; ?>
    >
    <p class="p-hover"><?php echo $group4['titre_milieu']; ?></p>
    <div class="icon-container">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/svg/Group 1300.svg"
      />
    </div>
  </a>

  <?php endif; ?>
  </div>
</section>

<!-- Fin partie du milieu -->

<!-- Partie du bas = tissus -->

<section id="tissus-container">
  <!-- Partie gauche tissus -->

  <article id="article-bottom-left">
    <img
      class="image-tissus"
      src="<?php echo get_field('tissus_image_gauche_tissus')['sizes']['my-custom-size']; ?>"
    />
  </article>

  <!-- Partie droite tissus -->

  <article id="article-bottom-right">
    <h2 class="sous-titre-tissus"><?php the_field('tissus_titre_droit_tissus') ?></h2>
    <p class="text-tissus"><?php the_field('tissus_wysiwyg_droit_tissus') ?></p>

    <?php 
  $group5 = get_field('tissus_bouton_tissus');

  if($group5['titre_tissus']) :

  $url5 = $group5['url_tissus'];
  $target5 = 'target="_blank" rel="noopener"';

  if( $group5['choice_tissus'] == 'page_link_tissus' ) {
      $url5 = $group5['page_link_tissus'];
      $target5 = '';
  } ?>

    <a class="lien" href="<?php echo $url5 ?>" <?php echo $target5; ?>
      >
      <p class="p-hover"><?php echo $group5['titre_tissus']; ?></p>
      <div class="icon-container">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/svg/Group 1300.svg"
        />
      </div>
    </a>

    <?php endif; ?>
  </article>
</section>

<?php get_footer(); ?>
