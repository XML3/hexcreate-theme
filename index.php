<?php get_header(); ?>
<main>
    <?php
    get_template_part('resources/components/acf-components/main/hero');
    get_template_part('resources/components/cpt-components/main/solutions');
    get_template_part('resources/components/acf-components/main/process');
    get_template_part('resources/components/acf-components/main/design');
    get_template_part('/resources/components/acf-components/main/seo-optimization');
    get_template_part('/resources/components/acf-components/main/development-section');
   
    ?>
</main>

<?php get_footer(); ?>

