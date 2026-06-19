<?php 
$research_title = get_field('research_title');
$research_subtitle = get_field('research_subtitle');
$research_content = get_field('research_content');
$price_wireframe_title = get_field('price_wireframe_title');
$price_wireframe_subtitle = get_field('price_wireframe_subtitle');
$price_wireframe_image = get_field('price_wireframe_image');

if (!$research_title && !$research_subtitle && !$research_content && !$price_wireframe_title && !$price_wireframe_subtitle && !$price_wireframe_image) return;
?>

<!-- MOBILE/TABLET LAYOUT (visible below 1280px) -->
<div class="block xl:hidden">
    <!-- Top section - Research (bg-primary area) -->
    <div class="bg-secondary py-16 px-6">
        <div class="space-y-8">
            <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($research_title); ?></h3>
             <h4 class="font-manrope semi-bold-20 text-title"><?php echo esc_html($research_subtitle); ?></h4>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($research_content); ?></div>
        </div>
    </div>
    
    <!-- Bottom section - Carousel Wireframe (bg-accent area) -->
    <div class="bg-accent py-16 px-6">
        <div class="space-y-8">
            <h3 class="font-manrope normal-60 text-primary text-center md:text-left"><?php echo esc_html($price_wireframe_title); ?></h3>
             <h4 class="font-manrope semi-bold-20 text-primary text-center md:text-left"><?php echo esc_html($price_wireframe_subtitle); ?></h4>
            <div class="flex justify-center w-full">
                <img class="max-w-full h-auto object-contain drop-shadow-sm/50 rounded-lg" src="<?php echo esc_url($price_wireframe_image['url']); ?>" alt="<?php echo esc_attr($price_wireframe_image['alt']); ?>">
            </div>
        </div>
    </div>
</div>

<!-- DESKTOP LAYOUT (visible above 1280px) -->
<section class="hidden xl:block relative xl:h-screen">
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2">
        <div class="bg-secondary"></div>
        <div class="bg-accent"></div>
    </div>
    <div class="relative container-wide mx-auto xl:min-h-screen flex items-center tall-tablet-scroll short-mobile-scroll pointer-events-auto">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full">

            <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4 flex items-center xl:items-start  justify-center flex-col">           
                <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($research_title); ?></h3>
                <h4 class="font-manrope semi-bold-20 text-title"><?php echo esc_html($research_subtitle); ?></h4>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($research_content); ?></div>
            </div>
        <!-- Right column content -->
            <div class="vertical-text-scroll space-y-6 w-full flex justify-center items-center flex-col bg-transparent">
                <h3 class="font-manrope normal-60 text-primary"><?php echo esc_html($price_wireframe_title); ?></h3>
                 <h4 class="font-manrope semi-bold-20 text-primary"><?php echo esc_html($price_wireframe_subtitle); ?></h4>
                <div class="flex justify-center xl:justify-end items-center w-full">
                <img class="w-full max-w-xl h-auto  object-contain drop-shadow-sm/50 " src="<?php echo esc_url($price_wireframe_image['url']); ?>" alt="<?php echo esc_attr($price_wireframe_image['alt']); ?>">
            </div>      
            </div>
        <div>     
    </div>
</section>