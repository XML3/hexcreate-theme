<?php
$dev_title = get_field('dev_title');
$dev_subtitle = get_field('dev_subtitle');
$dev_content_one = get_field('dev_content_one');
$dev_sub_problem = get_field('dev_sub_problem');
$dev_content_problem = get_field('dev_content_problem');
$dev_sub_approach = get_field('dev_sub_approach');
$dev_content_approch = get_field('dev_content_approach');
$dev_subtitle_two = get_field('dev_subtitle_two');
$dev_content_two = get_field('dev_content_two');
$lets_talk_button = get_field('lets_talk_button');
$stack_blocks = get_field('stack_blocks');

if (
    !$dev_title && !$dev_subtitle && !$dev_content_one && !$dev_sub_problem && !$dev_content_problem && !$dev_sub_approach && !$dev_content_approch && !$dev_subtitle_two && !$dev_content_two &&
    !$stack_blocks
) return;
?>
<!-- SECTION 2: Content (Two Columns) -->
<section class="relative min-h-screen tall-tablet-scroll short-mobile-scroll">

    <!-- Background colors - absolute positioned to span full width -->
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2 min-h-screen tall-tablet-scroll short-mobile-scroll">
        <div class="bg-primary"></div>
        <div class="bg-secondary"></div>
    </div>

    <!-- Content - relative positioned to stay on top -->
    <div class="relative container-wide mx-auto h-full min-h-screen flex items-center ">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full mt-8 xl:mt-0 gap-30">

            <!-- Left column content -->

            <div class="vertical-text-scroll w-full xl:w-3/4 h-full">
                  <h3 class="font-manrope normal-60 text-title mb-8"><?php echo esc_html($dev_title); ?></h3>
                <div class="space-y-4">
                    <h4 class="font-manrope semi-bold-20 text-title"><?php echo esc_html($dev_subtitle); ?></h4>
                    <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($dev_content_one); ?></div>
                </div>
                <div class="space-y-4 pt-4">
                    <h4 class="font-manrope medium-20 text-title"><?php echo esc_html($dev_sub_problem); ?></h4>
                    <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($dev_content_problem); ?></div>
                </div>
                <div class="space-y-4 pt-4">
                    <h4 class="font-manrope medium-20 text-title"><?php echo esc_html($dev_sub_approach); ?></h4>
                    <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($dev_content_approch); ?></div>
                </div>
            </div>

            <!-- Right column content -->
            <div class="vertical-text-scroll full h-full flex justify-center items-center  bg-primary p-4 rounded-2xl mt-8 xl:mt-0">
                <div class="w-full 2xl:w-3/4 h-full flex justify-center items-center flex-col space-y-8">
                    <h4 class="font-manrope bold-24 text-title text-left"><?php echo esc_html($dev_subtitle_two); ?></h4>
                    <div class="font-inter normal-16 text-font text-left"><?php echo wp_kses_post($dev_content_two); ?></div>
                    <?php if ($lets_talk_button) : ?>
                        <a href="<?php echo esc_url($lets_talk_button['url']); ?>"
                            class="w-full xl:w-3/4 inline-block bg-accent-orange text-primary text-center py-3 rounded-md hover:bg-accent hover:text-primary transition mt-8">
                            <?php echo esc_html($lets_talk_button['title']); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>