<?php
/*
Template Name: Development
*/
get_header();
?>
<main>
    <?php
    get_template_part('resources/components/acf-components/dev/dev-hero');
    get_template_part('resources/components/acf-components/dev/dev-intro');
    get_template_part('resources/components/cpt-components/dev/dev-stack');
    get_template_part('/resources/components/acf-components/dev/dev-stack-two');
    get_template_part('resources/components/acf-components/dev/dev-faq');
    get_template_part('resources/components/acf-components/dev/dev-testimonials');

    ?>
</main>
<?php get_footer(); ?>