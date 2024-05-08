<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- TEKST -->
<section class="bg-een relative overflow-hidden">
    <div class="w-full max-w-[390px] md:max-w-[540px] lg:max-w-[1120px] px-[20px] md:px-[40px] lg:px-[70px] mx-auto flex justify-between items-center py-[65px] md:py-[70px] lg:py-[100px] xl:py-[120px] relative z-[2]">
        <div class="w-full text-editor font-twee text-twee"><?php echo get_field('tekst');?></div>
    </div>
</section>
<!-- TEKST EINDE -->
<?php endif; ?>
