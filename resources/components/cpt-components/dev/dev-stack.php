<?php
$stack_overview_title = get_field('stack_overview_title');
$stack_overview_subtitle = get_field('stack_overview_subtitle');
$stack_overview_intro = get_field('stack_overview_intro');
$stack_decision_title = get_field('stack_decision_title');
$stack_decision_intro = get_field('stack_decision_intro');
$overview_cta_button = get_field('overview_cta_button');
$stack_icon = get_field('stack_icons');

if (!$stack_icon && !$stack_overview_title && !$stack_overview_subtitle && !$stack_overview_intro && !$stack_decision_title && !$stack_decision_intro) return;
?>

<?php
$stack_cards = get_posts([
    'post_type' => 'stack_card',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
]);
?>
<!--SECTION 3: Stacks-->
<section class="stacks-section bg-secondary flex flex-col lg:min-h-screen tall-tablet-scroll short-mobile-scroll justify-center items-center">
    <!--Stack Overview + Cards (vertically centered) -->
    <div class="container-wide">
        <div class="bg-primary rounded-2xl my-8 xl:my-0">
        <div class="container-wide mx-auto w-full flex justify-center items-center flex-col gap-2 xl:gap-20 py-8 xl:py-10">

            <div class="w-full flex justify-center xl:justify-between items-center flex-col xl:flex-row ">
                <!-- TOP Row: Text Content -->
                <div class="flex flex-col space-y-8 w-full justify-center xl:justify-start items-center">
                    <div class="vertical-text-scroll space-y-4">
                        <h2 class="section-title font-manrope normal-20 text-title"><?php echo esc_html($stack_overview_title); ?></h2>
                        <h3 class="font-manrope bold-62 text-title w-full 2xl:w-3/4"><?php echo esc_html($stack_overview_subtitle); ?></h3>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center xl:items-end min-h-75 flex-col space-y-4 ">
                    <div class="font-manrope normal-20 text-title"><?php echo wp_kses_post($stack_overview_intro); ?></div>
                    <?php if ($overview_cta_button) : ?>
                        <a href="<?php echo esc_url($overview_cta_button['url']); ?>"
                            class="vertical-text-scroll w-full md:w-2/4 2xl:w-1/4 mb-10 inline-block font-manrope normal-16 text-title px-4 py-2 rounded-md border border-accent-orange hover:bg-accent-orange hover:border-none hover:text-primary transition mt-4 text-center">
                            <?php echo esc_html($overview_cta_button['title']); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="flex justify-between items-center flex-col xl:flex-row">
                <?php if ($stack_cards) : ?>
                    <div class="stack-cards-container grid grid-cols-1 md:grid-cols-2 xl:flex xl:flex-row gap-4 ">
                        <?php foreach ($stack_cards as $post) :
                            setup_postdata($post);
                            $stack_card_title = get_the_title();
                            $stack_card_logo = get_field('stack_card_logo');
                            $stack_card_subtitle = get_field('stack_card_subtitle');
                            $stack_card_content = get_the_content();
                            $stack_icon = get_field('stack_icon');
                        ?>
                            <div class="stack-card-item">
                                <!-- Front content (visible normally) -->
                                <div class="card-front font-manrope bold-18 text-primary flex items-center">
                                    <img src="<?php echo esc_url($stack_card_logo['url']); ?>" alt="stack logos" class="w-32 lg:w-38 h-auto object-contain mb-6">
                                </div>

                                <!-- Back content (revealed on hover) -->
                                <div class="card-back space-y-4">
                                    <img src="<?php echo esc_url($stack_icon['url']); ?>" alt="stack icons" class="w-10 lg:w-12 h-auto object-contain">
                                    <h3 class="font-inter text-accent-orange bold-16"><?php echo esc_html($stack_card_subtitle); ?></h3>
                                    <p class="font-inter text-title normal-14"><?php echo wp_kses_post($stack_card_content); ?></p>
                                </div>
                            </div>
                        <?php endforeach;
                        wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </div>
</section>