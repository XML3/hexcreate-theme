<?php
$more_design_work = get_field('more_design_work');
$more_design_work_image = get_field('more_design_work_image');
?>



<section class="bg-accent-orange lg:min-h-[calc(100vh-65vh)] short-mobile-scroll">
<div class ="relative lg:min-h-[calc(100vh-65vh)] short-mobile-scroll bg-repeat bg-contain lg:bg-fixed bg-center shadow-[inset_0_0_0_50vw_rgba(0,0,0,0.1)] min-h-[40vh] pointer-events-auto"
style="background-image: url('<?php echo esc_url($more_design_work_image['url']); ?>'); background-size: 250px auto;"
    aria-label="<?php echo esc_attr($more_design_work_image['alt']) ?>">
    <!--Hidden image for SEO and A11Y-->
    <img
        src="<?php echo esc_url($more_design_work_image['url']); ?>"
        alt="<?php echo esc_attr($more_design_work_image['alt']) ?>"
        class="sr-only" />

    <div class="background-reveal absolute inset-0 flex justify-center items-center">
        <div class="w-full xl:w-1/2 flex justify-center items-center text-center bg-neutral-300/5 backdrop-blur-lg rounded-lg py-4">        
                <h3 class="font-manrope bold-48-62 text-primary"><?php echo esc_html($more_design_work); ?></h3>          
        </div>
    </div>
</div>
</section>
