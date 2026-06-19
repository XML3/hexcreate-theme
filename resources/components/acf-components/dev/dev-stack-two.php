<?php
$stack_decision_title = get_field('stack_decision_title');
$stack_decision_intro = get_field('stack_decision_intro');
$stack_closing_title = get_field('stack_closing_title');
$stack_closing_line = get_field('stack_closing_line');
$stack_contact_button = get_field('stack_contact_button');

if ( !$stack_decision_title && !$stack_decision_intro && !$stack_closing_title && !$stack_closing_line && !$stack_contact_button ) return;
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
             
            <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4">
                <div class="space-y-4">
                    <h3 class="font-manrope normal-60 text-title mb-8"><?php echo esc_html($stack_decision_title); ?></h3>
                    <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($stack_decision_intro); ?></div>
                </div>
            </div>

            <!-- Right column content -->
            <div class="space-y-6 w-full 2xl:w-3/4 flex justify-self-end flex-col bg-primary p-4 xl:p-20 rounded-2xl mt-8 xl:mt-0">
                <h4 class="vertical-text-scroll font-manrope semi-bold-20 text-title text-left lg:text-left"><?php echo esc_html($stack_closing_title); ?></h4>
                <div class="vertical-text-scroll font-inter normal-16 text-font text-left lg:text-left"><?php echo wp_kses_post($stack_closing_line); ?></div>
                <?php if ($stack_contact_button) : ?>
                    <a href="<?php echo esc_url($stack_contact_button['url']); ?>"
                        class="w-full inline-block bg-accent-orange text-primary text-center px-8 py-3 rounded-md hover:bg-accent hover:text-primary transition mt-8">
                        <?php echo esc_html($stack_contact_button['title']); ?>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>