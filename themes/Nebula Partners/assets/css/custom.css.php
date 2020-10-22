/* Main */

<?php the_field('google_font_import','option');?>

html body {
    font-family: <?php the_field('font_family','option');?>;
    font-size: <?php the_field('font-size','option');?>;
}

html body p, html body h1, html body h2, html body h3, html body h4, html body h5, html body h6, html body a  {
    font-family: <?php the_field('font_family','option');?>;
}
 
html body h1, html body h2, html body h3, html body h4, html body h5  {
    font-family: <?php the_field('font_family_headings','option');?>;
}