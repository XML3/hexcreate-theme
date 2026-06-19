<?php
$project_overview_title = get_field('project_overview_title');
$pain_point_title = get_field('pain_point_title');
$pain_point_content = get_field('pain_point_content');
$early_decision_title = get_field('early_decision_title');
$early_decision_content = get_field('early_decision_content');
$example_image_title = get_field('example_image_title');
$example_image = get_field('example_image');



if (!$project_overview_title && !$pain_point_title && !$pain_point_content && !$early_decision_title && !$early_decision_content &&  !$example_image_title && !$example_image) return;
?>
<!-- MOBILE/TABLET LAYOUT (visible below 1280px) -->
<div class="block xl:hidden">
    <!-- Top section with bg-primary -->
    <div class="bg-primary py-16 px-6">
        <div class="space-y-8 mb-12">
            <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($project_overview_title); ?></h3>
            <h4 class="font-inter semi-bold-20 text-title"><?php echo esc_html($pain_point_title); ?></h4>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($pain_point_content); ?></div>
            <h4 class="font-inter semi-bold-20 text-title"><?php echo esc_html($early_decision_title); ?></h4>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($early_decision_content); ?></div>
        </div>
    </div>

    <!-- Bottom section with bg-secondary for image -->
    <div class="bg-secondary py-16 px-6">
        <div class="bg-primary p-6 md:p-8 rounded-2xl">
            <h3 class="font-manrope bold-40 text-title mb-6"><?php echo esc_html($example_image_title); ?></h3>
            <div class="flex justify-center w-full">
                <img class="w-full max-w-sm h-auto object-contain drop-shadow-sm/50 rounded-lg" src="<?php echo esc_url($example_image['url']); ?>" alt="<?php echo esc_attr($example_image['alt']); ?>">
            </div>
        </div>
    </div>
</div>

<!-- DESKTOP LAYOUT (visible above 1280px) -->
<section class="hidden xl:block relative xl:min-h-screen">
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2">
        <div class="bg-primary"></div>
        <div class="bg-secondary"></div>
    </div>

    <div class="relative container-wide mx-auto xl:min-h-screen tall-tablet-scroll short-mobile-scroll pointer-events-auto flex items-center">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full">

            <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4">
                <h2 class="font-manrope normal-60 text-title"><?php echo esc_html($project_overview_title); ?></h2>
                <h4 class="font-inter semi-bold-20 text-title"><?php echo esc_html($pain_point_title); ?></h4>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($pain_point_content); ?></div>
                <h4 class="font-inter semi-bold-20 text-title"><?php echo esc_html($early_decision_title); ?></h4>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($early_decision_content); ?></div>
            </div>
            <!-- Right column content -->
            <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4 flex justify-self-end items-center flex-col">
                <h3 class="font-inter bold-40 text-title text-center"><?php echo esc_html($example_image_title); ?></h3>
                <div class=" bg-primary p-8 rounded-2xl">
                    <div class="flex justify-center w-full">
                        <img class="w-full max-w-xl h-auto object-contain drop-shadow-sm/50 " src="<?php echo esc_url($example_image['url']); ?>" alt="<?php echo esc_attr($example_image['alt']); ?>">
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
</section>