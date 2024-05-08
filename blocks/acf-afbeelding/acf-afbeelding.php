<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- AFBEELDING -->
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<section>
    <div class="w-full h-[380px] md:h-[540px] lg:h-[720px] xl:h-[812px] overflow-hidden">
        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-h-full min-w-full object-cover object-center-top">
    </div>
</section>
<!-- AFBEELDING EINDE -->
<?php endif; ?>
