<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php include get_template_directory() . '/componenten/style.php'; ?>
<!-- CONTACT -->
<section class="bg-white relative overflow-hidden">
    <div class="container flex flex-col lg:flex-row lg:justify-between items-center z-[2] relative py-[50px] md:py-[70px] lg:py-[100px] xl:py-[120px">
        <div class="w-full md:w-[440px] lg:w-[457px] xl:w-[457px] mx-auto lg:mx-[unset] bg-een  defaultform">
            <h2 class="font-twee font-bold text-vier text-35 leading-41 md:32 md:leading-38 lg:text-36 lg:leading-42 xl:text-40 xl:leading-46 lg:hidden mb-[25px]"><?php echo get_field('titel');?></h2>
            <?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
        </div>
        <div class="w-full md:w-[440px] lg:w-[433px] xl:w-[563px] mx-auto lg:mx-[unset]">
            <div class="w-full lg:w-[298px]">
                <h2 class="font-twee font-bold text-vier text-35 leading-41 md:32 md:leading-38 lg:text-36 lg:leading-42 xl:text-40 xl:leading-46 hidden lg:block"><?php echo get_field('titel');?></h2>
                <div class="font-een font-normal text-twee text-18 leading-24 lg:text-16 lg:leading-22 xl:text-18 xl:leading-24 mt-[50px] md:mt-[60px] lg:mt-[20px] text-editor"><?php echo get_field('tekst');?></div>
                <div class="grid gap-[10px] mt-[15px]">
                    <a href="tel:<?php echo get_field('telefoonnummer', 'option');?>" class="flex items-center">
                        <p class="font-een font-bold text-twee text-20 leading-24"><?php echo get_field('telefoonnummer', 'option');?></p>
                    </a>
                    <a href="mailto:<?php echo get_field('email', 'option');?>" class="flex items-center">
                        <p class="font-een font-bold text-twee text-20 leading-24"><?php echo get_field('email', 'option');?></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT EINDE -->
<?php endif; ?>
