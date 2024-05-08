<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
 <!-- KLANTEN SLIDER -->
<section class="bg-een">
    <div class="w-screen relative overflow-x-hidden swiper swiperhero py-[50px] md:py-[30px] lg:py-[45px] xl:py-[60px]">
        <div id="scroll-text" class="flex w-full swiper-wrapper">
            <div class="flex items-center space-x-[120px] w-max swiper-slide">
                <?php
                if( have_rows('klanten') ):
                    while( have_rows('klanten') ) : the_row(); ?>
                    <?php
                    $image = get_sub_field('logo');
                    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                    ?>
                     <div class="w-[130px] h-[70px] klantlogo flex justify-center items-center">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
                <?php
                if( have_rows('klanten') ):
                    while( have_rows('klanten') ) : the_row(); ?>
                    <?php
                    $image = get_sub_field('logo');
                    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                    ?>
                     <div class="w-[130px] h-[70px] klantlogo flex justify-center items-center">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
                <?php
                if( have_rows('klanten') ):
                    while( have_rows('klanten') ) : the_row(); ?>
                    <?php
                    $image = get_sub_field('logo');
                    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                    ?>
                     <div class="w-[130px] h-[70px] klantlogo flex justify-center items-center">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
                <?php
                if( have_rows('klanten') ):
                    while( have_rows('klanten') ) : the_row(); ?>
                    <?php
                    $image = get_sub_field('logo');
                    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                    ?>
                     <div class="w-[130px] h-[70px] klantlogo flex justify-center items-center">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
                <?php
                if( have_rows('klanten') ):
                    while( have_rows('klanten') ) : the_row(); ?>
                    <?php
                    $image = get_sub_field('logo');
                    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                    ?>
                     <div class="w-[130px] h-[70px] klantlogo flex justify-center items-center">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
                <?php
                if( have_rows('klanten') ):
                    while( have_rows('klanten') ) : the_row(); ?>
                    <?php
                    $image = get_sub_field('logo');
                    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                    ?>
                     <div class="w-[130px] h-[70px] klantlogo flex justify-center items-center">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
                <?php
                if( have_rows('klanten') ):
                    while( have_rows('klanten') ) : the_row(); ?>
                    <?php
                    $image = get_sub_field('logo');
                    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                    ?>
                     <div class="w-[130px] h-[70px] klantlogo flex justify-center items-center">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- KLANTEN SLIDER EINDE -->
<?php endif; ?>
