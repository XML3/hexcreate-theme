<?php
$process_title = get_field('process_title');
$process_subtitle = get_field('process_subtitle');
$process_content = get_field('process_content');
$process_image = get_field('process_image');
$the_process = get_field('the_process');


if (!$process_title && !$process_subtitle && !$process_content && !$process_image) return;
?>

<section class="xl:min-h-screen short-mobile-scroll h-screen-if-tall bg-secondary process-section">
    <div class="container-wide">

        <!--The Process-->
        <div class="vertical-text-scroll w-full grid grid-cols-1 xl:grid-cols-3 pt-15 pb-20 2xl:pt-20 2xl:pb-40">
            <div class="col-span-3 space-y-6">
                <h2 class="section-title font-manrope normal-20 text-title"><?php echo esc_html($process_title); ?></h2>
                          <div class="font-manrope normal-60 text-title"><?php echo wp_kses_post($process_content); ?></div>
          
            </div>
         
         </div>
        <!--The Process steps-->
        <?php
        $the_process = get_field('the_process');
        if ($the_process) :
            $items = [
                ['title' => $the_process['number_one'], 'title_two' => $the_process['title_one'], 'content' => $the_process['content_one']],
                ['title' => $the_process['number_two'], 'title_two' => $the_process['title_two'], 'content' => $the_process['content_two']],
                ['title' => $the_process['number_three'], 'title_two' => $the_process['title_three'], 'content' => $the_process['content_three']],
                ['title' => $the_process['number_four'], 'title_two' => $the_process['title_four'], 'content' => $the_process['content_four']],

            ];
        ?>

            <div class="flex flex-col gap-4 mb-8 xl:mb-20">
                <?php foreach ($items as $item): ?>
                    <div class="vertical-text-scroll border-b border-details py-10 items-center">
                        <div class="container-content grid grid-cols-1 xl:grid-cols-3 items-center">
                        <div class="col-span-1 flex flex-row gap-2">
                            <h2 class="medium-20 font-kelly text-accent-orange">
                                <?php echo esc_html($item['title']); ?>
                            </h2>
                                 <h2 class="medium-20 font-manrope text-title">
                                <?php echo esc_html($item['title_two']); ?>
                            </h2>
                        </div>
                     
                        <div class="col-span-2">
                            <div class="w-full lg:w-3/4 text-font normal-16 font-inter">
                                <?php echo wpautop(wp_kses_post($item['content'])); ?>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
  
</div>
</section>