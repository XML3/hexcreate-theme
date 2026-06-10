<?php
$accordion_two = get_field('accordion_two');
$faq_title = get_field('faq_title');

if (!$accordion_two && !$faq_title) return;
?>

<!--SECTION 4: FQA-->
<section class="xl:h-screen h-screen-if-tall short-mobile-scroll bg-primary flex justify-center items-center">
    <div class="container-wide">
        <div class="flex flex-col gap-8 xl:gap-16 animate-background rounded-2xl py-4 xl:py-20">
            <div class="container-wide w-full flex justify-center items-start text-left flex-col space-y-4 relative">
                <h2 class="section-title font-manrope bold-62 text-primary"><?php echo esc_html($faq_title) ?></h2>
            </div>
            <!--Accordion-->
            <div class="vertical-text-scroll container-content w-full">
                <div class="w-full flex flex-col space-y-4 text-left mb-6 md:mb-0 bg-primary xl:p-10 rounded-lg min-h-125">

                    <?php
                    $accordion_two = get_field('accordion_two');
                    if ($accordion_two) :
                        $items = [
                            ['title' => $accordion_two['question_one'], 'content' => $accordion_two['answer_one']],
                            ['title' => $accordion_two['question_two'], 'content' => $accordion_two['answer_two']],
                            ['title' => $accordion_two['question_three'], 'content' => $accordion_two['answer_three']],
                            ['title' => $accordion_two['question_four'], 'content' => $accordion_two['answer_four']],
                            ['title' => $accordion_two['question_five'], 'content' => $accordion_two['answer_five']],
                            ['title' => $accordion_two['question_six'], 'content' => $accordion_two['answer_six']],
                            ['title' => $accordion_two['question_seven'], 'content' => $accordion_two['answer_seven']],
                        ];
                    ?>

                        <div class="accordion w-full space-y-2 p-1 rounded-lg">
                            <div class="p-3 xl:p-4">
                                <?php foreach ($items as $item): ?>
                                    <div class="accordion border-b border-black/70 last:border-b-0 p-4 md:p-8 xl:p-0">
                                        <div class="accordion_intro medium-18 font-inter m-1 xl:m-4 cursor-pointer text-title flex justify-between items-center">
                                            <?php echo esc_html($item['title']); ?>
                                            <svg clas="accordion-active" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.75 4H9.5v1.5h7.94L3.97 18.97l1.06 1.06L18.5 6.56v7.94H20V5.25C20 4.56 19.44 4 18.75 4Z" fill="#0f0f0f" />
                                            </svg>
                                        </div>
                                        <div class="accordion_content text-title normal-16 font-inter max-h-0 overflow-hidden transition-all duration-300">
                                            <?php echo wpautop(wp_kses_post($item['content'])); ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>
</section>