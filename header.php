<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php if (get_field('head', 'option')): ?>   
    <?php echo get_field('head', 'option');?>
    <?php endif; ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php echo get_field('google_font', 'option');?>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title><?php bloginfo( 'name' ); ?> - <?php the_title();?></title>
    <?php wp_head(); ?>
</head>
<?php include get_template_directory() . '/componenten/style.php'; ?>
<body <?php body_class( 'page-block non-active scroll-nonactive' ); ?>>
<?php if (get_field('body', 'option')): ?>   
    <?php echo get_field('body', 'option');?>
<?php endif; ?>
<header class="h-[80px] lg:h-[60px] xl:h-[80px] w-full fixed top-0 left-0 right-0 bg-[#0000004D] z-[9999]">
    <div class="h-full max-w-[430px] md:max-w-[848px] lg:max-w-[1420px] xl:max-w-[1600px] px-[20px] md:px-[40px] lg:px-[70px] xl:px-[80px] mx-auto flex justify-between items-center">
        <a href="/" class="logo flex items-center h-full ">
            <?php if (get_field('logo_type', 'option') === "tekst"): ?>   
                <p class="text-35 leading-35 text-een font-een font-bold"><?php echo get_field('tekst_logo', 'option');?></p>
            <?php endif; ?>
            <?php if (get_field('logo_type', 'option') === "png"): ?> 
                <?php
                $image = get_field('afbeelding_logo', 'option');
                $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                ?>  
               <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-[35px] w-auto">
            <?php endif; ?>
        </a>
        <div class="navbar hidden lg:block">
            <div class="flex space-x-[35px] items-center">
                <?php
                if( have_rows('menu', 'option') ):
                    while( have_rows('menu', 'option') ) : the_row(); ?>
                    <?php
                    $link = get_sub_field('menu_item', 'option');
                    $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                    $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                    $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                    ?>
                      <a href="<?php echo $link_url; ?>" class="font-een font-normal lg:text-16 lg:leading-21 xl:text-18 xl:leading-22 text-een" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
                <?php
                $link = get_field('uitgelicht', 'option');
                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                ?>
                <?php if (get_field('uitgelicht', 'option')): ?>   
                <a href="<?php echo $link_url; ?>" class="lg:w-[100px] lg:h-[40px] xl:w-[120px] xl:h-[50px] flex items-center justify-center border-[1px] border-een font-twee font-bold lg:text-16 lg:leading-21 xl:text-18 xl:leading-22 text-een duration-300" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <?php endif; ?>
            </div>
        </div>
        <button id="menu" class="h-[40px] w-[42px] bg-drie lg:hidden flex flex-col justify-center items-center relative">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<div class="menu fixed h-[100dvh] w-full top-0 bottom-0 bg-twee z-[999] lg:hidden">
    <div class="h-full w-[390px] px-[20px] md:w-[768px] md:px-[40px] mx-auto flex flex-col justify-center">
        <?php
        if( have_rows('menu', 'option') ):
            while( have_rows('menu', 'option') ) : the_row(); ?>
            <?php
            $link = get_sub_field('menu_item', 'option');
            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
            ?>
                <a href="<?php echo $link_url; ?>" class="font-een font-bold text-35 leading-40 md:text-50 md:leading-100 text-een" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <hr class="my-[15px] md:my-[5px] border-[#fff] border-[1px]">
            <?php
            endwhile;
        else :
        endif;
        ?>
        <?php
        $link = get_field('uitgelicht', 'option');
        $link_url = isset($link['url']) ? esc_url($link['url']) : '';
        $link_text = isset($link['title']) ? esc_html($link['title']) : '';
        $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
        ?>
        <a href="<?php echo $link_url; ?>" class="font-twee font-bold text-35 leading-40 md:text-50 md:leading-100 text-een" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
    </div>
</div>
