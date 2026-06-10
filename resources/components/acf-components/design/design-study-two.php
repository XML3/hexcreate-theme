<?php 
$beyond_portfolio_title = get_field('beyond_portfolio_title');
$beyond_portfolio_content = get_field('beyond_portfolio_content');
$day_to_day_wireframe = get_field('day_to_day_wireframe');
$day_to_day_wireframe_title = get_field('day_to_day_wireframe_title');


if (!$beyond_portfolio_title && !$beyond_portfolio_content && !$day_to_day_wireframe_title && !$day_to_day_wireframe ) return;
?>
<!-- MOBILE/TABLET LAYOUT (visible below 1280px) -->
<div class="block xl:hidden">
    <!-- Top section with bg-primary -->
    <div class="bg-primary py-16 px-6">
        <div class="space-y-8 mb-12">
            <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($beyond_portfolio_title); ?></h3>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($beyond_portfolio_content); ?></div>
        </div>
    </div>
    
    <!-- Bottom section with bg-secondary for image -->
    <div class="bg-secondary py-16 px-6">
        <div class="bg-primary p-6 md:p-8 rounded-2xl">
            <h3 class="font-manrope normal-60 text-title mb-6"><?php echo esc_html($day_to_day_wireframe_title); ?></h3>
            <div class="flex justify-center w-full">
                <img class="max-w-full h-auto object-contain drop-shadow-sm/50 rounded-lg" src="<?php echo esc_url($day_to_day_wireframe['url']); ?>" alt="<?php echo esc_attr($day_to_day_wireframe['alt']); ?>">
            </div>
        </div>
    </div>
</div>

<!-- DESKTOP LAYOUT (visible above 1280px) -->
<section class="hidden xl:block relative xl:h-screen">
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2">
        <div class="bg-primary"></div>
        <div class="bg-secondary"></div>
    </div>

    <div class="relative container-wide mx-auto xl:min-h-screen tall-tablet-scroll short-mobile-scroll pointer-events-auto flex items-center">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full">

            <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4">
                <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($beyond_portfolio_title); ?></h3>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($beyond_portfolio_content); ?></div>
            </div>
            <!-- Right column content -->
            <div class="vertical-text-scroll space-y-8 w-full  xl:w-3/4 flex justify-self-end flex-col bg-primary p-10 rounded-2xl">
                <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($day_to_day_wireframe_title); ?></h3>
                <div class="flex justify-center xl:justify-end w-full">
                <img class="max-w-full  h-auto  object-contain drop-shadow-sm/50 " src="<?php echo esc_url($day_to_day_wireframe['url']); ?>">
            </div>      
            </div>
            <div>

            </div>
        </div>
</section>