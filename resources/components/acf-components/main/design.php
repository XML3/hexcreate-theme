<?php
$design_title = get_field('design_title');
$design_subtitle = get_field('design_subtitle');
$design_content = get_field('design_content');
$ux_design_image = get_field('ux_design_image');
$percentage_blocks = get_field('percentage_blocks');
$backgound_design_image = get_field('background_design_image');
$design_page_button = get_field('design_page_button');



if (!$design_title && !$design_subtitle && !$design_content && !$percentage_blocks && !$backgound_design_image && !$design_page_button) return;
?>

<section class="vertical-text-scroll container-wide lg:min-h-[calc(100vh-65vh)] short-mobile-scroll">
<div class ="relative bg-no-repeat bg-contain lg:bg-fixed bg-center shadow-[inset_0_0_0_50vw_rgba(0,0,0,0.1)] min-h-[40vh] bg-accent-orange pointer-events-auto rounded-2xl top-10 2xl:top-0"
    style="background-image: url('<?php echo esc_url($backgound_design_image['url']); ?>');"
    aria-label="<?php echo esc_attr($backgound_design_image['alt']) ?>">
    <!--Hidden image for SEO and A11Y-->
    <img
        src="<?php echo esc_url($backgound_design_image['url']); ?>"
        alt="<?php echo esc_attr($backgound_design_image['alt']) ?>"
        class="sr-only" />

    <div class="background-reveal container-wide w-full h-full grid grid-cols-1 xl:grid-cols-2 gap-10 xl:gap-0 py-4 items-center">
        <div class="w-full md:w-1/2 xl:w-[65%] h-full justify-center items-center text-left">
            <div class="flex items-center space-y-4 xl:pt-10">
                <h3 class="font-manrope bold-48-62  text-primary"><?php echo esc_html($design_subtitle); ?></h3>
            </div>
        </div>

        <div class="flex justify-end items-center">
            <h3 class="font-manrope bold-48-62  text-primary">DESIGN</h3>
        </div>
    </div>
</div>
</section>

<section class="lg:min-h-[calc(100vh-35vh)] bg-primary flex items-center mt-6 xl:mt-0 ">
    <div class="container-content">
    <div class="background-reveal vertical-text-scroll  w-full h-full grid grid-cols-1 xl:grid-cols-2">
        <!--Left column with image-->
        <div class="w-full h-full flex flex-col justify-center space-y-5 text-left mb-8">
            <h2 class="section-title font-manrope normal-20 text-title"><?php echo esc_html($design_title); ?></h2>
            <div class=" w-full flex flex-col space-y-4">
                <div class="font-inter normal-60 text-font text-center xl:text-left"><?php echo wp_kses_post($design_content); ?> </div>
                <a href="<?php echo get_permalink(get_page_by_path('design')); ?>"
                    class="mt-8 w-full xl:w-2/4 inline-block px-8 py-2 bg-accent-orange font-inter text-primary primary thin-16 rounded-sm hover:border hover:border-accent hover:bg-light/10 hover:text-accent text-center">LEARN MORE →
                </a>
            </div>
        </div>

        <!--Right column-->
        <div class="w-full h-full flex flex-col justify-around items-center xl:items-end mb-8 xl:mb-0">
            <div class="grid grid-cols-2 gap-2 p-4 rounded-xl">
                <?php
                if ($percentage_blocks) :
                    $items = [
                        ['title' => $percentage_blocks['block_one_title'], 'content' => $percentage_blocks['block_one_content']],
                        ['title' => $percentage_blocks['block_two_title'], 'content' => $percentage_blocks['block_two_content']],
                        ['title' => $percentage_blocks['block_three_title'], 'content' => $percentage_blocks['block_three_content']],
                        ['title' => $percentage_blocks['block_four_title'], 'content' => $percentage_blocks['block_four_content']],
                    ];
                ?>
                    <?php foreach ($items as $item): ?>
                        <div class="border border-title rounded-lg p-2 aspect-square max-w-[175px] w-full flex flex-col justify-center mx-auto space-y-4">
                            <div class="flex justify-center">
                                <h3 class="w-1/3 font-kelly bold-18 text-accent-orange text-center"><?php echo esc_html($item['title']); ?></h3>
                            </div>
                            <div class="flex justify-center">
                                <p class="font-inter normal-16 text-font"><?php echo esc_html($item['content']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
</section>