<?php 
$constraints_title = get_field('constraints_title');
$constraint_content = get_field('constraint_content');
$outcome_title = get_field('outcome_title');
$outcome_content = get_field('outcome_content');
$yoska_website_link = get_field('yoska_website_link');

if (!$constraints_title && !$constraint_content && !$outcome_title && !$outcome_content && !$yoska_website_link) return;
?>
<!-- MOBILE/TABLET LAYOUT (visible below 1280px) -->
<div class="block xl:hidden">
    <!-- Top section - Constraints -->
    <div class="bg-secondary py-16 px-6">
        <div class="space-y-8">
            <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($constraints_title); ?></h3>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($constraint_content); ?></div>
        </div>
    </div>
    
    <!-- Bottom section - Outcome Card -->
    <div class="bg-primary py-16 px-6">
        <div class="bg-secondary p-6 md:p-8 rounded-2xl space-y-6">
            <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($outcome_title); ?></h3>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($outcome_content); ?></div>
            <?php if ($yoska_website_link) : ?>
                <a href="<?php echo esc_url($yoska_website_link['url']); ?>"
                    class="w-full lg:w-2/4 inline-block font-manrope normal-18 bg-accent-orange text-primary px-8 py-3 rounded-md hover:bg-accent hover:text-primary transition mt-4 text-center">
                    <?php echo esc_html($yoska_website_link['title']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- DESKTOP LAYOUT (visible above 1280px) -->
<section class="hidden xl:block relative xl:h-screen">
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2">
         <div class="bg-secondary"></div>
         <div class="bg-primary"></div>
    </div>
    < <div class="relative container-wide mx-auto xl:min-h-screen tall-tablet-scroll short-mobile-scroll pointer-events-auto flex items-center">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full">

            <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4">
                <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($constraints_title); ?></h3>
                <div class="font-inter normal-16 textfont"><?php echo wp_kses_post($constraint_content); ?></div>
            </div>
            <!-- Right column content -->
            <div class="vertical-text-scroll space-y-8 w-full  xl:w-3/4 flex justify-self-end flex-col bg-secondary p-20 rounded-2xl">
                <h3 class=" font-manrope normal-60 text-title text-left xl:text-left"><?php echo esc_html($outcome_title); ?></h3>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($outcome_content); ?></div>
                <?php if ($yoska_website_link) : ?>
                        <a href="<?php echo esc_url($yoska_website_link['url']); ?>"
                            class="w-full  inline-block font-manrope normal-18 bg-accent-orange text-primary px-8 py-3 rounded-md hover:bg-accent hover:text-primary transition mt-4 text-center">
                            <?php echo esc_html($yoska_website_link['title']); ?>
                        </a>
                    <?php endif; ?>
            </div>
            <div>
            </div>
        </div>
</section>