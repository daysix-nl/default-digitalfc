<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>

<footer>
    <section class="bg-drie py-[50px] md:py-[80px] lg:py-[60px] relative">
        <div class="max-w-[430px] md:max-w-[848px] lg:max-w-[1420px] xl:max-w-[1600px] px-[20px] md:px-[40px] lg:px-[70px] xl:px-[80px] mx-auto flex justify-between flex-wrap">
            <div class="w-full md:w-[270px] lg:w-[430px] xl:w-[500px] ml-[unset] md:ml-[40px] lg:ml-[unset] h-auto flex flex-col justify-between">
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
                <div class="w-[330px] md:w-[270px] lg:w-[292px] xl:w-[318px] mt-[40px] md:mt-[unset]">
                    <p class="font-een font-normal text-drie text-14 leading-24 md:text-12 md:leading-22 xl:text-14 xl:leading-24 w-[277px] md:w-[215px] lg:w-[237px] xl:w-[264px] mt-[25px]"><?php echo get_field('tekst', 'option');?></p>
                    <div class="w-[134px] mt-[25px] grid grid-cols-4">
                        <?php if (get_field('linkedin', 'option')): ?>   
                         <a href="<?php echo get_field('linkedin', 'option');?>" class="linkedin" target="_blank">
                            <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" width="25.619" height="25.619" viewBox="0 0 25.619 25.619">
                                <g id="Black_Solid" data-name="Black Solid">
                                    <path id="Path_496" data-name="Path 496" d="M248.632,210.461v-.031c-.007.01-.015.021-.021.031Z" transform="translate(-234.913 -198.836)" fill="#fff"/>
                                    <path id="Path_497" data-name="Path 497" d="M12.81,0a12.81,12.81,0,1,0,12.81,12.81A12.809,12.809,0,0,0,12.81,0ZM8.682,19.96H5.441V10.208H8.682ZM7.062,8.879H7.039a1.69,1.69,0,1,1,.043-3.37,1.69,1.69,0,1,1-.021,3.37ZM20.371,19.96H17.13V14.743c0-1.311-.469-2.2-1.642-2.2a1.774,1.774,0,0,0-1.663,1.186,2.214,2.214,0,0,0-.107.791v5.446H10.475s.044-8.836,0-9.752h3.244v1.382a3.222,3.222,0,0,1,2.92-1.611c2.133,0,3.733,1.393,3.733,4.388Z" fill="#fff"/>
                                </g>
                            </svg>
                        </a>
                        <?php endif; ?>
                        <?php if (get_field('facebook', 'option')): ?>   
                        <a href="<?php echo get_field('facebook', 'option');?>" class="linkedin" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25.714" height="25.619" viewBox="0 0 25.714 25.619">
                            <path id="facebook" d="M25.714,12.857A12.857,12.857,0,1,0,9.753,25.338V16.785H7.1V12.857H9.753V11.165c0-4.374,1.979-6.4,6.278-6.4a14.152,14.152,0,0,1,2.8.321V8.638c-.3-.03-.829-.05-1.487-.05-2.109,0-2.923.8-2.923,2.873v1.4h4.2l-.723,3.927h-3.48v8.834a12.856,12.856,0,0,0,11.3-12.762Z" fill="#fff"/>
                            </svg>
                        </a>
                        <?php endif; ?>
                        <?php if (get_field('instagram', 'option')): ?>   
                        <a href="<?php echo get_field('instagram', 'option');?>" class="linkedin" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25.619" height="25.619" viewBox="0 0 25.619 25.619">
  <path id="square-instagram" d="M11.117,42.276a3.051,3.051,0,1,0,4.232.841A3.051,3.051,0,0,0,11.117,42.276Zm8.137-3.911a3.076,3.076,0,0,0-1.052-.686,16.673,16.673,0,0,0-4.752-.372c-.234,0-.452.006-.64.006s-.412,0-.652-.006a16.388,16.388,0,0,0-4.741.372,3.131,3.131,0,0,0-1.052.686,2.994,2.994,0,0,0-.686,1.052,16.924,16.924,0,0,0-.372,4.758c0,.234.006.452.006.635s0,.4-.006.635A16.924,16.924,0,0,0,5.678,50.2a3.131,3.131,0,0,0,.686,1.052,2.994,2.994,0,0,0,1.052.686,16.673,16.673,0,0,0,4.752.372c.234,0,.452-.006.64-.006s.412,0,.652.006a16.388,16.388,0,0,0,4.741-.372,3.131,3.131,0,0,0,1.052-.686,2.994,2.994,0,0,0,.686-1.052,16.393,16.393,0,0,0,.372-4.746c0-.24-.006-.463-.006-.652s0-.406.006-.652a16.428,16.428,0,0,0-.372-4.746h0a3.131,3.131,0,0,0-.686-1.052Zm-3.837,2.545a17,17,0,1,1-.006,0Zm1.67-.074a1.138,1.138,0,0,1-.406-.492,1.1,1.1,0,0,1,.234-1.2,1.052,1.052,0,0,1,.56-.3,1.1,1.1,0,0,1,.635.063,1.126,1.126,0,0,1,.492.4,1.08,1.08,0,0,1,.183.606,1.153,1.153,0,0,1-.08.417,1.127,1.127,0,0,1-.234.355,1.081,1.081,0,0,1-.355.24,1.049,1.049,0,0,1-.417.086h0a1.08,1.08,0,0,1-.606-.183Zm8.532-5.175A3.663,3.663,0,0,0,21.959,32H3.66A3.663,3.663,0,0,0,0,35.66v18.3a3.663,3.663,0,0,0,3.66,3.66h18.3a3.663,3.663,0,0,0,3.66-3.66Zm-5.2,16.755A5.455,5.455,0,0,1,16.584,53.9c-1.51.086-6.039.086-7.548,0A5.455,5.455,0,0,1,5.2,52.415a5.425,5.425,0,0,1-1.475-3.831c-.086-1.51-.086-6.039,0-7.548A5.45,5.45,0,0,1,5.2,37.2a5.435,5.435,0,0,1,3.831-1.475c1.51-.086,6.039-.086,7.548,0A5.45,5.45,0,0,1,20.415,37.2a5.425,5.425,0,0,1,1.475,3.831c.086,1.5.086,6.027,0,7.543a5.45,5.45,0,0,1-1.475,3.831Z" transform="translate(0 -32)" fill="#fff"/>
</svg>

                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-[175px] lg:w-[250px] xl:w-[260px] grid h-fit mt-[50px] md:mt-[unset]">
                <h3 class="font-een font-bold text-drie text-18 leading-24 md:text-16 md:leading-22 xl:text-18 xl:leading-24 md:mb-[25px] xl:mb-[35px]"><?php echo get_field('titel_kolom_1', 'option');?></h3>
                <a href="tel:<?php echo get_field('telefoonnummer', 'option');?>" class="font-een font-normal text-drie text-14 leading-24 md:text-12 md:leading-22 xl:text-14 xl:leading-24"><?php echo get_field('telefoonnummer', 'option');?></a>
                <a href="mailto:<?php echo get_field('email', 'option');?>" class="font-een font-normal text-drie text-14 leading-24 md:text-12 md:leading-22 xl:text-14 xl:leading-24"><?php echo get_field('email', 'option');?></a>
                <?php
                $link = get_field('link', 'option');
                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                ?>
                <?php if (get_field('link', 'option')): ?>   
                <a href="<?php echo $link_url; ?>" class="font-een font-normal text-drie text-14 leading-24 md:text-12 md:leading-22 xl:text-14 xl:leading-24 md:mt-[22px] xl:mt-[24px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <?php endif; ?>
            </div>
            <div class="w-full md:w-[122px] lg:w-[250px] xl:w-[260px] grid h-fit mt-[30px] md:mt-[unset]">
                <h3 class="font-een font-bold text-drie text-18 leading-24 md:text-16 md:leading-22 xl:text-18 xl:leading-24 md:mb-[25px] xl:mb-[35px]"><?php echo get_field('titel_kolom_2', 'option');?></h3>
                <?php
                if( have_rows('menu', 'option') ):
                    while( have_rows('menu', 'option') ) : the_row(); ?>
                    <?php
                    $link = get_sub_field('menu_item', 'option');
                    $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                    $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                    $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                    ?>
                      <a href="<?php echo $link_url; ?>" class="font-een font-normal text-drie text-14 leading-24 md:text-12 md:leading-22 xl:text-14 xl:leading-24" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
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
                <a href="<?php echo $link_url; ?>" class="font-een font-normal text-drie text-14 leading-24 md:text-12 md:leading-22 xl:text-14 xl:leading-24" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
            </div>
            <div class="hidden lg:block lg:w-[130px] xl:w-[150px]"></div>
        </div>
    </section>
    <section class="bg-een">
        <div class="max-w-[430px] md:max-w-[848px] lg:max-w-[1420px] xl:max-w-[1600px] px-[20px] md:px-[40px] lg:px-[70px] xl:px-[80px] mx-auto">
            <p class="font-een font-normal text-twee text-12 leading-24 py-[20px] lg:py-[15px] xl:py-[20px]">Copyright <?php echo date('Y'); ?> - <?php bloginfo( 'name' ); ?> | <a href="https://digitalfc.nl" target="_blank">By Digital FC</a></p>
        </div>
    </section>
<?php if (get_field('footer', 'option')): ?>   
    <?php echo get_field('footer', 'option');?>
<?php endif; ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
