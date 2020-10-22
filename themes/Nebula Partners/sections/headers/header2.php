<a class="to_content" href="#main">Skip to content &rarr;</a>

<header id="header2">
  <div class="logo">
    <div class="oval"></div>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img src="<?php the_field('logo','option') ;?>" title="Logo" alt="<?php echo get_bloginfo( 'name' ); ?> Logo">
    </a>
  </div>



<a class="mobmenu menuicon <?php if ( get_field('white_pg') ):?>mobconwhite<?php endif ;?>">
  <span></span><span></span><span></span>
  <div class="ovalcon">
    <div class="rings"></div>
    <div class="rings"></div>
    <div class="rings"></div>
    <div class="rings"></div>
    <div class="rings"></div>
    <div class="rings"></div>
    <div class="rings"></div>
    <div class="rings"></div>
    <div class="rings"></div>
    <div class="rings"></div>
    <div class="rings"></div>
    <div class="rings"></div>
    <div class="rings"></div>
    <div class="rings"></div>
  </div>
</a>

<nav class="nav2 disappear onload">
  <div class="container nav_container">
    <?php if ( is_front_page() ) : ?>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    <?php else : ?>
        <?php wp_nav_menu( array( 'theme_location' => 'page-menu' ) ); ?>
    <?php endif ;?>

  </div>
  <div class="bg-circle fadeout">
  </div>
</nav>
  
</header>


<a id="main"></a>