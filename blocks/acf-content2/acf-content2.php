<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- CONTENT 2 -->
<section class="bg-een relative overflow-hidden">
    <div class="w-full max-w-[330px] md:max-w-[518px] lg:max-w-[784px] xl:max-w-[873px] px-[20px] md:px-[40px] lg:px-[70px] xl:px-[80px] mx-auto flex justify-between items-center py-[65px] md:py-[70px] lg:py-[100px] xl:py-[120px] relative z-[2] <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
        <div class="w-full">
            <h2 class="font-twee font-bold text-vier text-35 leading-41 md:text-40 md:leading-46 lg:text-50 lg:leading-56 xl:text-60 xl:leading-66 text-center"><?php echo get_field('titel');?></h2>
            <?php if (get_field('subtitel')): ?> 
            <h3 class="font-een font-normal text-twee text-17 leading-26 md:text-20 md:leading-26 lg:text-24 lg:leading-30 xl:text-24 xl:leading-30 mt-[10px] text-center"><?php echo get_field('subtitel');?></h3>
            <?php endif; ?>
            <div class="font-een font-normal text-twee text-15 leading-20 lg:text-16 lg:leading-24 xl:text-18 xl:leading-24 mt-[30px] md:mt-[35px] xl:mt-[35px] text-center text-editor"><?php echo get_field('tekst');?></div>
        </div>
    </div>
</section>
<!-- CONTENT 2 EINDE -->
<?php endif; ?>
