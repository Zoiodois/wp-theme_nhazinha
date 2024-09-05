<?php
if (!isset($attributes['imgURLGWebp'])) {
  $attributes['imgURLGWebp'] = '/wp-content/themes/portfolios_blocktheme/images/nhazinha/cavalos-matrizes-1-.webp';
}

?>

<div class="page-image">
    <picture>
        <?php if(isset($attributes['imgURLSWebp'])){ ?>

        <source media="(max-width: 480px)" srcset="<?php echo esc_url(site_url($attributes['imgURLSWebp'])); ?>"
            type="image/webp">
        <?php }

        if(isset($attributes['imgURLMWebp'])){ ?>
        <source media="(min-width: 480px) and (max-width: 960px)"
            srcset="<?php echo esc_url(site_url($attributes['imgURLMWebp'])); ?>" type="image/webp">
        <?php }
        if(isset($attributes['imgURLGWebp'])){ ?>
        <source media="(min-width: 960px)" srcset="<?php echo esc_url(site_url($attributes['imgURLGWebp'])); ?>"
            type="image/webp">
        <?php } ?>

        <img class="page-image__bg-image" src="<?php echo esc_url(site_url($attributes['imgURLGWebp'])); ?>" alt="">
    </picture>

</div>