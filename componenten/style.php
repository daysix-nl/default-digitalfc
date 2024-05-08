<style>
    .text-een {
        color: <?php echo get_field('tekstkleur_1', 'option');?>;
    }
    .text-twee {
        color: <?php echo get_field('tekstkleur_2', 'option');?>;
    }
    .text-vier {
        color: <?php echo get_field('kleur_3', 'option');?>;
    }
    .text-drie {
        color: <?php echo get_field('tekstkleur_3', 'option');?>;
    }
    .bg-een {
        background: <?php echo get_field('kleur_1', 'option');?>;
    }
    .bg-twee {
        background: <?php echo get_field('kleur_2', 'option');?>;
    }
    .bg-drie {
        background: <?php echo get_field('kleur_3', 'option');?>;
    }
    .border-een {
        border-color: <?php echo get_field('tekstkleur_1', 'option');?>;
    }
    .font-een {
        <?php echo get_field('font_1', 'option');?>
    }
    .font-twee {
        <?php echo get_field('font_2', 'option');?>
    }
    .padding-t-none {
        padding-top: 0px !important;
        margin-top: 0px !important;
    }
    .padding-b-none {
        padding-bottom: 0px !important;
        margin-bottom: 0px !important;
    }
    .non-active button#menu span {
        background: <?php echo get_field('tekstkleur_1', 'option');?> !important;
    }
    .active button#menu span {
        background: <?php echo get_field('tekstkleur_1', 'option');?> !important;
    }
    .bg-een .text-editor blockquote {
    border-left: 2px solid <?php echo get_field('tekstkleur_2', 'option');?>;
    }
    .bg-twee .text-editor blockquote {
    border-left: 2px solid <?php echo get_field('tekstkleur_1', 'option');?>;
    }
</style>