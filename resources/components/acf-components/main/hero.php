<?php
$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$hero_subtitle_two = get_field('hero_subtitle_two');
$hero_content = get_field('hero_content');
$hero_subtitle_three = get_field('hero_subtitle_three');
$hero_subtitle_four = get_field('hero_subtitle_four');
$hero_main_title = get_field('hero_main_title');


if (!$hero_title && !$hero_subtitle && !$hero_subtitle_two && !$hero_subtitle_three && !$hero_subtitle_four && !$hero_content && !$hero_main_title) return;
?>

<section class="hero-section top-0 min-h-screen flex justify-between items-center bg-primary">
    <!-- X Logo - Hidden initially, revealed at end -->
    <div class="fixed-logo absolute top-[47%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 pointer-events-none  w-full">
        <!-- <div class=" halftone-gradient "></div> -->
        <div class="hero-logo-mask">
            <div class=" halftone-gradient "></div>
            <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/src/images/wobble-yellow-cut.png" alt="image flicker">
        </div>
        <div class="final-reveal"></div>
    </div>

    <div class="relative z-0  w-full h-screen flex justify-between flex-col xl:flex-row">
        <!-- Hexcreate & Subtitle -->
        <div class="container-wide w-full h-full flex justify-start items-end gap-6 relative bottom-15">
            <div class="flex-col">
                <h4 class="scramble-text font-manrope thin-16 text-title mb-2" data-target="<?php echo esc_attr(get_field('hero_title')); ?>"></h4>
                <h4 class="scramble-text w-full thin-12 text-title font-inter"><?php echo esc_html($hero_subtitle_two); ?></h4>
                <div class="w-full xl:w-1/2 thin-12 text-title font-inter"><?php echo wp_kses_post($hero_content); ?></div>
    <div class="flex flex-row gap-4">
                <h1 class="font-manrope extrabold-220 text-title mt-4"><?php echo esc_html($hero_main_title); ?></h1>
                <h3 class="font-manrope bold-32 text-title border-3 border-title rounded-full py-1 lg:py-2 px-3.5 lg:px-2.5 h-1/2">HC</h3>
             
                </div>
            </div>
        </div>      
    </div>
</section>