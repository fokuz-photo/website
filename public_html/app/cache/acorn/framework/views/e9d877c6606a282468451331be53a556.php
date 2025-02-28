<form role="search" method="get" class="search-form" action="<?php echo e(home_url('/')); ?>">
  <label>
    <span class="sr-only">
      <?php echo e(_x('Search for:', 'label', 'sage')); ?>

    </span>

    <input
      type="search"
      placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'sage'); ?>"
      value="<?php echo e(get_search_query()); ?>"
      name="s"
    >
  </label>

  <button><?php echo e(_x('Search', 'submit button', 'sage')); ?></button>
</form>
<?php /**PATH /mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/fokuz-photo-sage/resources/views/forms/search.blade.php ENDPATH**/ ?>