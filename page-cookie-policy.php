<?php
/*
Template Name: Cookie Policy
*/
get_header();
?>
<main>
    <section class="bg-primary py-12">
        <div class="container-wide">
            <div class="container-content text-center">
                <h1 class="font-manrope bold-62 text-title">Cookie Policy</h1>
            </div>
        </div>
    </section>
    <!--Content section-->
    <section class="py-12">
        <div class="container-wide">
            <div id="cookie-policy-content" class="font-inter text-title max-w-180 mx-auto">
                <?php echo do_shortcode('[faz_cookie_policy_complete]'); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>