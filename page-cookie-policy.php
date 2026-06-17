<?php
/*
Template Name: Cookie Policy
*/
get_header();
?>
<main>
    <section class="bg-secondary py-12">
        <div class="container-wide">
            <div class="container-content text-center">
                <h1 class="font-manrope bold-62 text-title">Cookie Policy</h1>
                <p class="font-inter normal-18 text-font mt-4">
                    How we use cookies to improve your experience on our website.
                </p>
            </div>
        </div>
    </section>
    <!--Content section-->
    <section class="py-12">
        <div class="container-wide">
            <div class="container-content font-inter text-title max-w-180 mx-auto">
                <?php echo do_shortcode('[faz_cookie_policy_complete]'); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>