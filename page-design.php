<?php
/*
Template Name: Design
*/
get_header();
?>
<main>
    <?php
    get_template_part('resources/components/acf-components/design/design-hero');
    get_template_part('resources/components/acf-components/design/design-intro');
    get_template_part('resources/components/acf-components/design/design-study-one');
    get_template_part('resources/components/acf-components/design/design-study-two');
    get_template_part('resources/components/acf-components/design/design-study-three');
    get_template_part('resources/components/acf-components/design/design-study-four');
    get_template_part('resources/components/acf-components/design/design-study-five');
    get_template_part('resources/components/acf-components/design/design-study-final');
    ?>
</main>
<?php get_footer(); ?>