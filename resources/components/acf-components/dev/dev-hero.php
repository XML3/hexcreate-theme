<?php
$dev_hero_image = get_field('dev_hero_image');
$dev_hero_mobile_image = get_field('dev_hero_mobile_image');
$dev_hero_title = get_field('dev_hero_title');
$dev_hero_subtitle = get_field('dev_hero_subtitle');
$dev_hero_subtitle_two = get_field('dev_hero_subtitle_two');
$dev_hero_subtitle_three = get_field('dev_hero_subtitle_three');


$dev_bg_image = is_mobile_device() && $dev_hero_mobile_image ? $dev_hero_mobile_image : $dev_hero_image;

if (!$dev_hero_image && !$dev_hero_mobile_image && !$dev_hero_title && !$dev_hero_subtitle && !$dev_hero_subtitle_two && !$dev_hero_subtitle_three ) return;
?>
<!-- SECTION 1: Hero (Full Screen) -->
<section class="min-h-screen relative">
    <!-- Mobile: 1 column, Tablet/Desktop: 2 columns -->
    <div class="grid grid-cols-1 xl:grid-cols-[2fr_1fr] h-auto lg:h-screen short-mobile-scroll">

        <!-- Left Column -->
        <div class="bg-accent flex flex-col justify-end items-center min-h-[50vh] xl:min-h-0 order-1 lg:order-0 ">
            <div class="border-y border-title w-full p-6 md:p-8 lg:p-12">
                <h2 class="hero-dev-subtitle font-inter medium-18 text-title w-full lg:w-3/4 text-center lg:text-left px-4 md:px-8 lg:px-16">
                    <?php echo esc_html($dev_hero_subtitle); ?>
                </h2>
            </div>
            <div class="py-10 xl:py-0 px-4 md:px-8 lg:px-16 text-center lg:text-left min-h-[5vh] md:min-h-[30vh] xl:min-h-0 flex items-center">
                <h1 class="font-manrope extrabold-184 text-title leading-none">
                    <?php echo esc_html($dev_hero_title); ?>
                </h1>
            </div>
        </div>

        <!-- Right Column (Split into 2 rows) -->
        <div class="grid grid-rows-2 h-auto lg:h-full border-l-0 lg:border-l border-t lg:border-t-0 border-title order-2 lg:order-0">
            <!-- Top Right -->
            <div class="bg-title flex justify-center items-center p-6 md:p-8 lg:p-10 flex-col border-b border-title min-h-55 xl:min-h-0">
                <div id="p5-sphere-container" class="flex justify-center items-center w-full mb-4">
                    <!-- p5.js canvas will be injected here -->
                </div>
                <h2 class="font-manrope bold-20 text-[#7A7A7A] text-center mt-4">
                    <?php echo esc_html($dev_hero_subtitle_two); ?>
                </h2>
            </div>
            <!-- Bottom Right -->
            <div class="hero-scramble-container bg-accent flex justify-center xl:justify-start items-center p-0 xl:p-10 flex-col space-y-4 md:space-y-8 max-h-45 md:max-h-full">
                <h2 class="bold-20 font-manrope text-title">
                    <?php echo esc_html($dev_hero_subtitle_three); ?>
                </h2>
                <div class="scramble-text font-kode normal-14 text-title wrap-break-words text-center xl:text-left"></div>
            </div>
        </div>
    </div>
</section>