<?php
$primary_solution_title = get_field('primary_solution_title');
$primary_solution_content = get_field('primary_solution_content');
$final_image_title = get_field('final_image_title');
$final_image = get_field('final_image');

if (!$primary_solution_title && !$primary_solution_content  && !$final_image_title && !$final_image) return;
?>
<!-- MOBILE/TABLET LAYOUT (visible below 1280px) -->
<div class="block xl:hidden">
    <div class="bgsecondary py-16 px-6">
        <div class="space-y-8 mb-12">
            <h4 class="font-inter semi-bold-20 text-title"><?php echo esc_html($primary_solution_title); ?></h4>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($primary_solution_content); ?></div>
        </div>
    </div>

    <!-- Bottom section with bg-secondary for image -->
    <div class="bg-primary py-16 px-6">
        <div class="bg-accent p-6 md:p-8 rounded-2xl">
            <h3 class="font-manrope bold-40 text-primary mb-6"><?php echo esc_html($final_image_title); ?></h3>
            <div class="flex justify-center w-full">
                <img class="w-full max-w-sm h-auto object-contain drop-shadow-sm/50 rounded-lg" src="<?php echo esc_url($final_image['url']); ?>" alt="<?php echo esc_attr($final_image['alt']); ?>">
            </div>
        </div>
    </div>
</div>
<!-- DESKTOP LAYOUT (visible above 1280px) -->
<section class="hidden xl:block relative xl:min-h-screen">
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2">
        <div class="bg-secondary"></div>
        <div class="bg-primary"></div>
    </div>

    <div class="relative container-wide mx-auto xl:min-h-screen tall-tablet-scroll short-mobile-scroll pointer-events-auto flex items-center">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full">

            <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4">

                <h4 class="font-inter semi-bold-20 text-title"><?php echo esc_html($primary_solution_title); ?></h4>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($primary_solution_content); ?></div>
            </div>
            <!-- Right column content -->
            <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4 flex justify-self-end items-center flex-col">
                <h3 class="font-inter bold-40 text-title text-center w-full xl:w-3/4"><?php echo esc_html($final_image_title); ?></h3>
                <div class=" bg-accent p-8 rounded-2xl">
                    <div class="flex justify-center w-full">
                        <img class=" w-full max-w-xl h-auto object-contain drop-shadow-sm/50 " src="<?php echo esc_url($final_image['url']); ?>" alt="<?php echo esc_attr($final_image['alt']); ?>">
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
</section>