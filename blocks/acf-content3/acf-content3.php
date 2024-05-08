<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- CONTENT 3 -->
<?php
$link = get_field('button');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>

<section class="bg-twee">
    <div class=bg-twee relative">
        <div class="container md:pb-[90px] pb-[65px] lg:pb-[100px] xl:pb-[160px]">
            <div class="w-[350px] md:w-[387px] lg:w-[650px] xl:w-[773px] mx-auto pt-[50px] md:pt-[70px] lg:pt-[90px] xl:pt-[100px]">
                <h2 class="font-twee font-bold text-een text-35 leading-44 md:text-40 md:leading-40 lg:text-50 lg:leading-63 xl:text-60 xl:leading-75 text-center"><?php echo get_field('overmij_titel');?></h2>
                <div class="font-een font-normal text-een text-17 leading-22 md:text-15 md:leading-21 lg:text-20 lg:leading-26 xl:text-24 xl:leading-30 text-center mt-[40px] text-editor"><?php echo get_field('overmij_tekst');?></div>
            </div>
            <?php if (get_field('button')): ?>   
            <div class="container mt-[60px] md:mt-[65px] lg:mt-[80px] ">
                <a href="<?php echo $link_url; ?>" class="w-fit px-[30px] h-[50px] md:h-[40px] xl:h-[50px] flex items-center border-[1px] border-een mx-auto font-twee font-bold text-een text-18 leading-22 md:text-16 md:leading-21 xl:text-18 xl:leading-22 duration-300" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- CONTENT 3 -->
<?php endif; ?>
