<!-- Molecule: entry-meta -->
<p class="entry-meta">

  <!-- If is_front_page -->
  <?php if (is_front_page() || is_author()) : ?>

    <!-- Atom: avatar -->
    <?php echo get_avatar( get_the_author_meta('ID'), 24 ); ?>

    <!-- Atom: author-link -->
    <a class="author-link" rel="author" href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?= get_the_author(); ?></a>

    <!-- Atom: tags-links -->
    <spam class="tags"><?php the_tags( __('on ', 'Sage') ); ?></spam>

  <?php else: ?>
  <?php endif; ?>

  <!-- Atom: post-updated -->
  <time class="post-updated" datetime="<?= get_post_time('d F Y'); ?>"><?= get_the_date('d F Y'); ?></time>

</p>
