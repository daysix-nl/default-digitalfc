<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- CONTENT 1 -->
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<?php if (get_field('uitlijning') !== "fotorechts"): ?>   
<section class="bg-een relative overflow-hidden">
    <div class="w-full max-w-[330px] md:max-w-[540px] lg:max-w-[1120px] xl:max-w-[1306px] px-[20px] md:px-[40px] lg:px-[70px] xl:px-[80px] mx-auto flex justify-between items-center py-[65px] md:py-[70px] lg:py-[100px] xl:py-[120px] relative z-[2] <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
        <div class="hidden lg:block lg:h-[600px] lg:w-[410px] xl:h-[650px] xl:w-[444px] overflow-hidden image-size">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-h-full min-w-full object-cover object-center-top">
        </div>
        <div class="w-full lg:block lg:w-[467px] xl:w-[499px] xl:mr-[95px]">
            <h2 class="font-twee font-bold text-vier text-35 leading-41 md:text-40 md:leading-46 lg:text-50 lg:leading-56 xl:text-60 xl:leading-66"><?php echo get_field('titel');?></h2>
            <?php if (get_field('subtitel')): ?>   
            <h3 class="font-een font-normal text-twee text-17 leading-26 md:text-20 md:leading-26 lg:text-24 lg:leading-30 xl:text-24 xl:leading-30 mt-[10px]"><?php echo get_field('subtitel');?></h3>
            <?php endif; ?>
            <div class="font-een font-normal text-twee text-15 leading-20 lg:text-16 lg:leading-24 xl:text-18 xl:leading-24 mt-[30px] md:mt-[35px] xl:mt-[35px] text-editor"><?php echo get_field('tekst');?></div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if (get_field('uitlijning') !== "fotolinks"): ?>   
<section class="bg-een relative overflow-hidden">
    <div class="w-full max-w-[330px] md:max-w-[540px] lg:max-w-[1120px] xl:max-w-[1306px] px-[20px] md:px-[40px] lg:px-[70px] xl:px-[80px] mx-auto flex justify-between items-center py-[65px] md:py-[70px] lg:py-[100px] xl:py-[120px] relative z-[2] <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
        <div class="w-full lg:block lg:w-[467px] xl:w-[499px]">
            <h2 class="font-twee font-bold text-vier text-35 leading-41 md:text-40 md:leading-46 lg:text-50 lg:leading-56 xl:text-60 xl:leading-66"><?php echo get_field('titel');?></h2>
            <?php if (get_field('subtitel')): ?>   
            <h3 class="font-een font-normal text-twee text-17 leading-26 md:text-20 md:leading-26 lg:text-24 lg:leading-30 xl:text-24 xl:leading-30 mt-[10px]"><?php echo get_field('subtitel');?></h3>
            <?php endif; ?>
            <div class="font-een font-normal text-twee text-15 leading-20 lg:text-16 lg:leading-24 xl:text-18 xl:leading-24 mt-[30px] md:mt-[35px] xl:mt-[35px] text-editor"><?php echo get_field('tekst');?></div>
        </div>
        <div class="hidden lg:block lg:h-[600px] lg:w-[410px] xl:h-[650px] xl:w-[444px] overflow-hidden xl:mr-[50px]">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-h-full min-w-full object-cover object-center-top">
        </div>
    </div>
</section>
<?php endif; ?>
<!-- CONTENT 1 EINDE -->
<?php endif; ?>
