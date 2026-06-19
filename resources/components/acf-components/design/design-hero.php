<?php
$design_hero_title = get_field('design_hero_title');
$design_hero_subtitle = get_field('design_hero_subtitle');
$design_hero_subtitle_two = get_field('design_hero_subtitle_two');
$design_hero_subtitle_three = get_field('design_hero_subtitle_three');
$design_scramble_text = get_field('design_scramble_text');
$design_hero_image = get_field('design_hero_image');


if (!$design_hero_title && !$design_hero_subtitle && !$design_hero_subtitle_two && !$design_hero_subtitle_three && !$design_scramble_text && !$design_hero_image) return;
?>
<section class="min-h-screen relative border-b border-title">
    <!-- Mobile: 1 column, Desktop: 2 columns -->
    <div class="grid grid-cols-1 xl:grid-cols-[2fr_1fr] h-auto short-mobile-scroll">

        <!-- Left Column -->
        <div class="bg-secondary flex flex-col justify-end items-center min-h-[50vh] xl:min-h-0 order-1 xl:order-0">
            <div class="border-y border-title w-full p-6 md:p-8 xl:p-12">
                <h2 class="hero-dev-subtitle font-inter medium-18 text-[#0f0f0f] w-full text-center xl:text-left px-4 xl:px-8">
                    <?php echo esc_html($design_hero_subtitle); ?>
                </h2>
            </div>
                  <div class="py-10 xl:py-0 px-4 md:px-8 lg:px-16 text-center lg:text-left min-h-[5vh] md:min-h-[30vh] xl:min-h-0 flex items-center">
            <h1 class="font-manrope extrabold-184 text-accent-orange leading-none ">
                <?php echo esc_html($design_hero_title); ?>
            </h1>
                  </div>
        </div>

        <!-- Right Column -->
        <div class="grid grid-rows-2 h-auto xl:h-full border-l-0 xl:border-l border-t xl:border-t-0 border-title order-2 xl:order-0">
            
            <!-- Top Right -->
            <div class="w-full bg-primary flex justify-center items-center p-6 md:p-8 flex-col border-b border-title min-h-75 xl:min-h-0 relative">
                <div class="halftone-gradient absolute inset-0 opacity-30"></div>     
                <img class="w-2/3 md:w-3/4 h-auto object-contain relative z-10" src="<?php echo esc_url($design_hero_image['url']); ?>" alt="Design">
                <h2 class="font-inter bold-20 text-title mt-4 relative z-10"><?php echo esc_html($design_hero_subtitle_two); ?></h2>
            </div>
            
            <!-- Bottom Right -->
            <div class="hero-scramble-container bg-secondary flex justify-center xl:justify-start items-center p-0 xl:p-10 flex-col space-y-4 md:space-y-8 max-h-45 md:max-h-full ">                       
                <h2 class="bold-20 font-manrope text-title w-full xl:w-3/4 text-center xl:text-left">
                   <?php echo esc_html($design_hero_subtitle_three); ?>
                </h2>
                <div class="scramble-text font-kode normal-14 text-title w-full xl:w-3/4 wrap-break-words text-center xl:text-left" data-target="<?php echo esc_attr(get_field('design_scramble_text')); ?>"></div>                 
            </div> 
        </div>

    </div>
</section>