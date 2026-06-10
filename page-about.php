<?php
/*
Template Name: About
*/
get_header();
?>
<main>
    <?php
    get_template_part('resources/components/acf-components/about/about-hero');
    get_template_part('resources/components/acf-components/about/about-intro');
    get_template_part('resources/components/acf-components/about/about-final');
    ?>
</main>
<?php get_footer(); ?>