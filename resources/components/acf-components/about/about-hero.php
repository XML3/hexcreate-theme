<?php 
$about_image = get_field('about_image');
$about_hero_title = get_field('about_hero_title');
$about_hero_subtitle = get_field('about_hero_subtitle');
$about_hero_subtitle_two = get_field('about_hero_subtitle_two');
$about_hero_subtitle_three = get_field('about_hero_subtitle_three');


if (!$about_image && !$about_hero_title && !$about_hero_subtitle && !$about_hero_subtitle_two && !$about_hero_subtitle_three) return;
?>
<section class="min-h-screen relative border-b border-title">
    <!-- Mobile: 1 column, Desktop: 2 columns -->
    <div class="grid grid-cols-1 xl:grid-cols-[2fr_1fr] h-auto xl:h-screen short-mobile-scroll">

        <!-- Left Column -->
        <div class="bg-primary flex flex-col justify-end items-start min-h-[50vh] xl:min-h-0 order-1 xl:order-0">
            <div class="border-y border-title w-full p-6 md:p-8 xl:p-12">
                     <h2 class="hero-dev-subtitle font-inter medium-18 text-title w-full xl:w-3/4 text-center xl:text-left px-4 md:px-8 xlg:px-16">
                    <?php echo esc_html($about_hero_subtitle); ?>
                </h2>
            </div>
              <div class="py-10 xl:py-0 px-4 md:px-8 xl:px-16 text-center xl:text-left min-h-[5vh] md:min-h-[30vh] xl:min-h-0 flex items-center">
            <h2 class="font-manrope extrabold-184 text-title leading-none px-4 xl:px-16 text-center xl:text-left">
                <?php echo esc_html($about_hero_title); ?>
            </h2>
            <h3 class="font-manrope text-title bold-24 border-2 border-title rounded-full py-0.5 px-1.5 lg:py-2.5 lg:px-2 xl:py-3.5 xl:px-3 relative xl:right-10 xl:top-8">HC</h3>
            </div>
        </div>

        <!-- Right Column -->
        <div class="grid grid-rows-2 h-auto xl:h-full border-l-0 xl:border-l border-t xl:border-t-0 border-title order-2 xl:order-0">
            
            <!-- Top Right -->
            <div class="w-full bg-title flex justify-center items-center p-6 md:p-8 flex-col border-b border-title min-h-75 xl:min-h-0 relative">   
                  <div class="hero-logo-mask"> 
                      <div class=" halftone-gradient "></div>
               <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/src/images/wobble-yellow-cut.png" alt="image flicker">
        </div>
                <h2 class="font-inter bold-20 text-primary mt-4 relative z-10"><?php echo esc_html($about_hero_subtitle_two); ?></h2>
            </div>
            
            <!-- Bottom Right -->
            <div class="hero-scramble-container bg-primary flex justify-center xl:justify-start items-center p-0 xl:p-10 flex-col space-y-4 md:space-y-8 max-h-45 md:max-h-full ">
                <h2 class="bold-20 font-manrope text-title text-center xl:text-left">
                   <?php echo esc_html($about_hero_subtitle_three); ?>
                </h2>
                <div class="scramble-text font-kode normal-14 text-title wrap-break-words text-center xl:text-left" data-target="<?php echo esc_attr(get_field('about_hero_scramble')); ?>"></div>
            </div>
        </div>

    </div>
</section>