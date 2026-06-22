<?php
/*
Template Name: Privacy Policy
*/
get_header();
?>

<main>
    <!-- Hero Section -->
    <section class="bg-secondary border-b border-title py-16">
        <div class="container-wide">
            <div class="container-content text-center">
                <h1 class="font-manrope bold-48-62 text-title">Privacy Policy</h1>
            </div>
        </div>
    </section>
    <!-- Content Section -->
    <section class="py-12">
        <div class="container-wide">
            <div class="container-content font-inter text-title max-w-180 mx-auto">
                <?php
                // Get the privacy policy page content
                $privacy_page_id = get_option('wp_page_for_privacy_policy');
                if ($privacy_page_id) {
                    $privacy_page = get_post($privacy_page_id);
                    echo apply_filters('the_content', $privacy_page->post_content);
                } else {
                    echo '<p>Privacy policy content not found. Please create a privacy policy page in Settings → Privacy.</p>';
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>