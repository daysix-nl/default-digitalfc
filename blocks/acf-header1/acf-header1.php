<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- HEADER 1 -->
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<?php
$link = get_field('button');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<?php include get_template_directory() . '/componenten/style.php'; ?>
<section class="w-full h-[100dvh] relative overflow-hidden min-h-[530px] md:min-h-[490px] lg:min-h-[570px] max-h-[560px] xl:min-h-[650px] lg:max-h-[unset]">
    <div class="absolute top-0 left-0 right-0 bottom-0 z-[2]">
        <div class="max-w-[430px] md:max-w-[848px] lg:max-w-[1420px] xl:max-w-[1600px] px-[20px] md:px-[40px] lg:px-[70px] xl:px-[80px] mx-auto h-full flex items-center">
        <div class="md:mb-[50px] lg:mb-[70px] xl:mb-[80px]">
            <h1 class="font-twee font-bold text-een text-35 leading-40 lg:text-50 lg:leading-55 xl:text-60 xl:leading-65 w-[326px] lg:w-[445px] xl:w-[535px]"><?php echo get_field('titel');?></h1>
            <div class="font-een font-normal text-een text-17 leading-22 md:text-15 md:leading-21 lg:text-20 lg:leading-26 xl:text-24 xl:leading-30 w-[275px] lg:w-[366px] xl:w-[455px] mt-[15px] text-editor"><?php echo get_field('tekst');?></div>
            <?php if (get_field('button')): ?>   
            <a href="<?php echo $link_url; ?>" class="w-fit px-[30px] h-[50px] md:h-[40px] xl:h-[50px] flex items-center border-[1px] border-een font-twee font-bold text-een text-18 leading-22 md:text-16 md:leading-21 xl:text-18 xl:leading-22 duration-300 mt-[30px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
            <?php endif; ?>
        </div>
        </div>
    </div>
    <div class="absolute top-0 left-0 bottom-0 h-full w-[80vw] md:w-[60vw] lg:w-[55vw] z-[1] bg-gradient-to-r from-[#00000099] to-transparent"></div>
    <div class="absolute bottom-0 left-0 right-0 h-[50px] lg:h-[70px] xl:h-[80px] z-[2]">
        <div class="h-full w-full flex justify-end relative">
        <div class="absolute top-0 left-0 right-0 bottom-0 hidden lg:block">
            <div class="max-w-[430px] md:max-w-[848px] lg:max-w-[1420px] xl:max-w-[1600px] px-[20px] md:px-[40px] lg:px-[70px] xl:px-[80px] mx-auto">
                <?php if (get_field('voetnoot')): ?>   
                <p class="font-een font-normal text-een md:text-13 md:leading-17 xl:text-16 xl:leading-21"><?php echo get_field('voetnoot');?></p>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </div>
    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-h-full min-w-full object-cover object-center-top">
</section>
<!-- HEADER 1 EINDE -->
<?php endif; ?>
