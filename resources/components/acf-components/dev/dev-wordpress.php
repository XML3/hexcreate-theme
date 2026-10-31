<?php
$wordpress_title = get_field('wordpress_title');
$wordpress_intro = get_field('wordpress_intro');
$wordpress_subtitle = get_field('wordpress_subtitle');
$wordpress_content = get_field('wordpress_content');
$wordpress_subtitle_two = get_field('wordpress_subtitle_two');
$wordpress_content_two = get_field('wordpress_content_two');
$wordpress_subtitle_three = get_field('wordpress_subtitle_three');
$wordpress_content_three = get_field('wordpress_content_three');
$wordpress_subtitle_four = get_field('wordpress_subtitle_four');
$wordpress_content_four = get_field('wordpress_content_four');
$wordpress_img = get_field('wordpress_img');
$wordpress_cta_button = get_field('wordpress_cta_button');

if (!$wordpress_title && !$wordpress_intro && !$wordpress_subtitle && !$wordpress_content && !$wordpress_subtitle_two && !$wordpress_content_two && !$wordpress_subtitle_three && !$wordpress_content_three && !$wordpress_subtitle_four && !$wordpress_content_four && !$wordpress_img && !$wordpress_cta_button)
    return;
?>

<!-- SECTION 2: Content (Two Columns) -->
<section class="relative min-h-screen tall-tablet-scroll short-mobile-scroll">

    <!-- Background colors - absolute positioned to span full width -->
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2 min-h-screen tall-tablet-scroll short-mobile-scroll">
        <div class="bg-secondary"></div>
        <div class="bg-primary"></div>
    </div>

    <!-- Content - relative positioned to stay on top -->
    <div class="relative container-wide mx-auto h-full min-h-screen flex items-center ">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full mt-8 xl:mt-0 gap-30">

            <!-- Left column content -->

            <div class="vertical-text-scroll w-full h-full flex justify-between items-center">
                <div class="h-full flex justify-between items-center flex-col">
                    <h3 class="font-manrope normal-60 text-title mb-8 xl:mb-12"><?php echo esc_html($wordpress_title); ?></h3>
                    <div class="vertical-text-scroll w-full h-full flex flex-col xl:flex-row justify-between items-center bg-primary rounded-2xl px-8">
                        <div class="w-full xl:w-3/4 h-auto flex justify-center items-center flex-col">
                            <img class="w-full lg:max-w-[40%] xl:max-w-[60%] h-auto object-contain" src="<?php echo $wordpress_img['url']; ?>" alt="<?php echo $wordpress_img['alt']; ?> ">
                            <h3 class="font-inter bold-24 text-title">WordPress</h3>
                        </div>
                        <h4 class="w-full font-inter normal-16 text-font"><?php echo wp_kses_post($wordpress_intro); ?></h4>
                    </div>
                </div>
            </div>

            <!-- Right column content -->
            <div class="vertical-text-scroll w-full h-full flex justify-center items-center bg-secondary rounded-2xl p-4 xl:py-8 flex-col">
                <div class="space-y-6 w-full xl:w-3/4 flex justify-center flex-col h-full">
                    <div class="space-y-4 pt-4">
                        <h4 class="font-manrope medium-20 text-title"><?php echo esc_html($wordpress_subtitle_two); ?></h4>
                        <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($wordpress_content_two); ?></div>
                    </div>
                    <div class="space-y-4 pt-4">
                        <h4 class="font-manrope medium-20 text-title"><?php echo esc_html($wordpress_subtitle_three); ?></h4>
                        <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($wordpress_content_three); ?></div>
                    </div>
                    <div class="space-y-4 pt-4">
                        <h4 class="font-manrope medium-20 text-title"><?php echo esc_html($wordpress_subtitle_four); ?></h4>
                        <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($wordpress_content_four); ?></div>
                    </div>
                    <div class="pt-8 flex justify-center items-center">
                        <a href="<?php echo esc_url($wordpress_cta_button['url']); ?>"
                            class="inline-block py-2 xl:py-3 w-full xl:w-1/2 bg-accent border border-accent font-inter text-primary normal-16 text-center rounded-sm hover:bg-transparent hover:border-accent hover:text-title mt-4">
                            <?php echo esc_html($wordpress_cta_button['title']) ?> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>