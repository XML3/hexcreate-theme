<?php 
$research_title = get_field('research_title');
$research_content = get_field('research_content');
$carousel_wireframe_title = get_field('carousel_wireframe_title');
$carousel_wireframe = get_field('carousel_wireframe');

if (!$research_title && !$research_content && !$carousel_wireframe_title && !$carousel_wireframe) return;
?>

<!-- MOBILE/TABLET LAYOUT (visible below 1280px) -->
<div class="block xl:hidden">
    <!-- Top section - Research (bg-primary area) -->
    <div class="bg-primary py-16 px-6">
        <div class="space-y-8">
            <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($research_title); ?></h3>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($research_content); ?></div>
        </div>
    </div>
    
    <!-- Bottom section - Carousel Wireframe (bg-accent area) -->
    <div class="bg-accent py-16 px-6">
        <div class="space-y-8">
            <h3 class="font-manrope normal-60 text-primary text-center md:text-left"><?php echo esc_html($carousel_wireframe_title); ?></h3>
            <div class="flex justify-center w-full">
                <img class="max-w-full h-auto object-contain drop-shadow-sm/50 rounded-lg" src="<?php echo esc_url($carousel_wireframe['url']); ?>" alt="<?php echo esc_attr($carousel_wireframe['alt']); ?>">
            </div>
        </div>
    </div>
</div>

<!-- DESKTOP LAYOUT (visible above 1280px) -->
<section class="hidden xl:block relative xl:h-screen">
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2">
        <div class="bg-primary"></div>
        <div class="bg-accent"></div>
    </div>
    <div class="relative container-wide mx-auto xl:min-h-screen flex items-center tall-tablet-scroll short-mobile-scroll pointer-events-auto">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full">

            <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4 ">           
                <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($research_title); ?></h3>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($research_content); ?></div>
            </div>
        <!-- Right column content -->
            <div class="vertical-text-scroll space-y-8 w-full  xl:w-3/4 flex justify-self-end flex-col bg-transparent p-10 ">
                <h3 class="font-manrope normal-60 text-primary"><?php echo esc_html($carousel_wireframe_title); ?></h3>
                <div class="flex justify-center xl:justify-end w-full">
                <img class="max-w-full  h-auto  object-contain drop-shadow-sm/50 " src="<?php echo esc_url($carousel_wireframe['url']); ?>">
            </div>      
            </div>
        <div>     
    </div>
</section>