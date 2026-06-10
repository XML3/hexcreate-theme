<?php
$solutions_intro_title = get_field('solutions_intro_title');
$solutions_intro_subtitle = get_field('solutions_intro_subtitle');
$solutions_intro_content = get_field('solutions_intro_content');
$solutions_intro_subtitle_three = get_field('solutions_intro_subtitle_three');
$solutions_intro_content_three = get_field('solutions_intro_content_three');

if (
    !$solutions_intro_title && !$solutions_intro_subtitle && !$solutions_intro_content &&
    !$solutions_intro_subtitle_three && !$solutions_intro_content_three
) return;
?>


<?php
$solution_cards = get_posts([
    'post_type' => 'solution_card',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
]);
?>

<?php if ($solution_cards) : ?>
    <section class="cards-stack bg-primary min-h-screen flex justify-center items-center">

        <div class="container-content w-full flex flex-col xl:flex-row items-center justify-between z-100">
            <div class="w-full flex flex-row space-y-6 xl:pr-30">
                <div class="space-y-4 vertical-text-scroll">
                    <h2 class="section-title text-title normal-20 font-manrope mb-8"><?php echo esc_html($solutions_intro_title) ?></h2>
                    <h3 class="text-title bold-62 font-manrope"><?php echo esc_html($solutions_intro_subtitle); ?> </h3>
                </div>
            </div>

            <div class="cards-container relative w-full xl:max-w-xl xl:mx-auto ">
                <?php foreach ($solution_cards as $index => $post) :
                    setup_postdata($post);
                    $card_title = get_the_title();
                    $card_number = get_field('card_number');
                    $card_subtitle = get_field('card_subtitle');
                    $card_content = get_the_content();
                ?>

                    <div class="card absolute top-0 left-0 w-full h-full rounded-2xl shadow-2xl overflow-hidden p-2 sm:p-6 xl:p-8"
                        style="
                z-index: <?php echo $index; ?>;
                transform: translateX(<?php echo $index * 15; ?>px) translateY(<?php echo $index * -10; ?>px);
                opacity: 0;
             ">
                        <div class="relative z-10 h-full flex flex-col xl:flex-row justify-center items-center xl:max-w-full xl:mx-auto text-center xl:text-left gap-6 xl:gap-0 ">
                            <div class="flex justify-center items-center xl:border-r border-primary h-full pr-0 xl:pr-10 mb-4 xl:mb-0">
                                <?php if ($post->ID == 39) : ?>
                                    <div class="text-title font-kelly bold-40 xl:mb-4"><?php echo esc_html($card_number); ?></div>
                                <?php else : ?>
                                    <div class="text-accent-orange font-kelly bold-40 xl:mb-4"><?php echo esc_html($card_number); ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="flex flex-col pl-0 xl:pl-10 w-full space-y-4">
                                <h2 class="font-raleway semi-bold-20 "><?php echo esc_html($card_title); ?></h2>
                                <?php if ($card_subtitle) : ?>
                                    <h3 class="font-manrope bold-32"><?php echo esc_html($card_subtitle); ?></h3>
                                <?php endif; ?>
                                <div class="font-inter normal-17 "><?php echo wp_kses_post($card_content); ?></div>
                            </div>
                        </div>
                    </div>

                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
        </div>
    </section>
<?php endif; ?>