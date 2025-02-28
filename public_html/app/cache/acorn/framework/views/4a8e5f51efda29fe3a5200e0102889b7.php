<header class="banner">




  <?php if(has_nav_menu('primary_navigation')): ?>
    <nav class="nav-primary" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
      <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]); ?>

    </nav>
  <?php endif; ?>
</header>
<?php /**PATH /mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/fokuz-photo/resources/views/sections/header.blade.php ENDPATH**/ ?>