<?php
$design_intro_title = get_field('design_intro_title');
$design_intro_subtitle = get_field('design_intro_subtitle');
$design_intro_content = get_field('design_intro_content');
$ux_vs_ui_title = get_field('ux_vs_ui_title');
$ux_title = get_field('ux_title');
$ux_content = get_field('ux_content');
$ui_title = get_field('ui_title');
$ui_content = get_field('ui_content');
$without_ux_title = get_field('without_ux_title');
$without_ux_content = get_field('without_ux_content');

if (!$design_intro_title && !$design_intro_subtitle && !$design_intro_content && !$ux_vs_ui_title && !$ux_title && !$ux_content && !$ui_title && !$ui_content && !$without_ux_title && !$without_ux_content) return;
?>
<!-- MOBILE/Tablet LAYOUT (visible below 1280px) -->
<div class="block xl:hidden">
    <div class="bg-primary py-16 px-6">
        <div class="space-y-8 mb-12">
            <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($design_intro_title); ?></h3>
            <h4 class="font-manrope semi-bold-20 text-title"><?php echo esc_html($design_intro_subtitle); ?></h4>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($design_intro_content); ?></div>
        </div>
        <div class="bg-secondary p-10 rounded-2xl space-y-6">
            <h4 class="font-manrope normal-60 text-title"><?php echo esc_html($ux_vs_ui_title); ?></h4>
            <div class="font-inter semi-bold-20 text-title"><?php echo wp_kses_post($ux_title); ?></div>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($ux_content); ?></div>
            <div class="font-inter semi-bold-20 text-title"><?php echo wp_kses_post($ui_title); ?></div>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($ui_content); ?></div>
        </div>
    </div>
</div>

<section class="hidden xl:block relative xl:h-screen">
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2">
        <div class="bg-primary"></div>
        <div class="bg-secondary"></div>
    </div>

    <div class="relative container-wide mx-auto xl:min-h-screen tall-tablet-scroll short-mobile-scroll pointer-events-auto flex items-center">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full">

            <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4">
                <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($design_intro_title); ?></h3>
                <h4 class="font-manrope semi-bold-20 text-title"><?php echo esc_html($design_intro_subtitle); ?></h4>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($design_intro_content); ?></div>
            </div>
            <!-- Right column content -->
            <div class="vertical-text-scroll space-y-6 w-full  xl:w-3/4 flex justify-self-end flex-col bg-primary p-10 rounded-2xl">
                <h4 class=" font-manrope normal-60 text-title text-left lg:text-left"><?php echo esc_html($ux_vs_ui_title); ?></h4>
                <div class=" font-inter semi-bold-20 text-title text-left lg:text-left"><?php echo wp_kses_post($ux_title); ?></div>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($ux_content); ?></div>

                <div class=" font-inter semi-bold-20 text-title text-left lg:text-left"><?php echo wp_kses_post($ui_title); ?></div>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($ui_content); ?></div>
            </div>
        </div>
    </div>
</section>