<?php
/*
Template Name: SEO
*/
get_header();
?>
<main>
    <?php
    get_template_part('resources/components/acf-components/seo/seo-hero');
    get_template_part('resources/components/acf-components/seo/seo-intro');
    get_template_part('resources/components/acf-components/seo/seo-optimization');
    ?>
</main>
<?php get_footer(); ?>