<?php
/*
Template Name: Contact
*/
get_header();
?>
<main>
    <?php
    get_template_part('resources/components/acf-components/contact/contact-hero');
      get_template_part('resources/components/acf-components/contact/contact');
      ?>
</main>
<?php get_footer(); ?>