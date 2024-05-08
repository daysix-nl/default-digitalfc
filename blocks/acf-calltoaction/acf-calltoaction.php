<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- CALL TO ACTION -->
<?php
$link = get_field('button');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<section class="bg-twee">
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="flex justify-center lg:justify-end items-center order-2 lg:order-1">
        <div class="w-[296px] md:w-[462px] lg:w-[490px] xl:w-[550px]">
            <div class="w-[290px] md:w-[375px] lg:w-[420px] xl:w-[465px] py-[50px] md:py-[75px]">
                <h2 class="font-twee font-bold text-32 leading-41 md:text-32 md:leading-38 lg:text-36 lg:leading-42 xl:text-40 xl:leading-46 text-een"><?php echo get_field('titel');?></h2>
                <?php if (get_field('subtitel')): ?>  
                <h3 class="font-twee font-normal text-een text-15 leading-20 lg:text-16 lg:leading-24 xl:text-18 xl:leading-24 mt-[15px]"><?php echo get_field('subtitel');?></h3>
                <?php endif; ?>
                <div class="font-een font-normal text-een text-15 leading-20 lg:text-16 lg:leading-24 xl:text-18 xl:leading-24 mt-[15px] md:max-w-[375px] lg:max-w-[375px] xl:max-w-[423px] text-editor"><?php echo get_field('tekst');?></div>
                <?php if (get_field('button')): ?>   
                <a href="<?php echo $link_url; ?>" class="w-fit px-[30px] h-[50px] md:h-[40px] xl:h-[50px] flex items-center border-[1px] border-een font-twee font-bold text-een text-18 leading-22 md:text-16 md:leading-21 xl:text-18 xl:leading-22  duration-300 mt-[55px] md:mt-[60px] lg:mt-[55px] xl:mt-[75px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <?php endif; ?>
            </div>
        </div>
        </div>
        <div class="h-[380px] md:h-[495px] lg:h-[unset] min-h-[45vw] w-full overflow-hidden order-1 lg:order-2">
        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-h-full min-w-full object-cover object-bottom">
        </div>
    </div>
</section>
<!-- CALL TO ACTION EINDE -->  
<?php endif; ?>
