<?php
$contact_title = get_field('contact_title');
$contact_form = get_field('contact_form');
$subscription_title = get_field('subscription_title');
$subscription_form = get_field('subscription_form');
?>

<section class="relative min-h-screen tall-tablet-scroll short-mobile-scroll ">
    <!-- Background colors - absolute positioned to span full width -->
    <div class="absolute inset-0 grid grid-cols-1 lg:grid-cols-2">
        <div class="bg-secondary"></div>
        <div class="bg-accent"></div>
    </div>

    <div class="relative container-wide mx-auto h-full min-h-screen flex items-center">
        <div class="grid grid-cols-1 lg:grid-cols-2 w-full mt-8 xl:mt-0">

            <div class="vertical-text-scroll space-y-8 w-full flex-col gap-10 flex justify-center items-start">
                <div class="space-y-6">
                     <h2 class="normal-60 font-manrope text-title"><?php echo esc_html($subscription_title) ?></h2>
                    <div class="font-inter normal-18 text-title"><?php echo wp_kses_post($subscription_form); ?></div>
                </div>
                <div class="bg-primary p-4 xl:p-10 rounded-2xl w-full xl:w-3/4">
                    <?php echo do_shortcode('[fluentform id="8"]') ?>
                </div>
            </div>

            <!-- Right column content -->
            <div class="space-y-6 w-full xl:w-3/4 flex justify-self-end flex-col  mt-8 xl:mt-0 gap-4">
                <div class="space-y-6">
                    <h2 class="vertical-text-scroll font-manrope normal-60 text-primary text-left lg:text-left"><?php echo esc_html($contact_title); ?></h2>
                    <div class="vertical-text-scroll font-inter normal-18 text-secondary text-left lg:text-left "><?php echo wp_kses_post($contact_form); ?></div>
                </div>
                <div class=" bg-primary p-4 xl:p-10 rounded-2xl">
                    <?php
                    echo do_shortcode('[fluentform id="6"]');
                    ?>
                </div>
            </div>
        </div>
    </div>

</section>