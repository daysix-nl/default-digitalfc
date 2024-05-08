<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php include get_template_directory() . '/componenten/style.php'; ?>
<!-- HEADER -->
<section class="bg-twee h-[250px] md:h-[200px] lg:h-[240px] xl:h-[300px]">
    <div class="container pt-[80px] lg:pt-[60px] xl:pt-[80px]">
        <div class="h-[170px] md:h-[120px] lg:h-[180px] xl:h-[220px] w-full flex items-center justify-center">
            <h1 class="font-twee font-bold text-een text-35 leading-41 md:text-35 md:leading-44 lg:text-50 lg:leading-63 xl:text-60 xl:leading-75 text-center"><?php the_title();?></h1>
        </div>
    </div>
</section>
<!-- HEADER EINDE -->
<?php endif; ?>
