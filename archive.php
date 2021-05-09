<?php get_header(); ?>

  <div class="row">
    <div class="col-xs-12 col-sm-8">
      <div class="row text-center no-margin">
        <?php
        if (have_posts()) { ?>

          <header class="page-header">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
          </header>

          <?php
          while (have_posts()) {
            the_post();
            get_template_part('content', 'archive');
          }
          ?>

          <div class="col-xs-12 text-center">
            <?php the_posts_navigation(); ?>
          </div>
        <?php
        }
        ?>
      </div>
    </div>

    <div class="col-xs-12 col-sm-4">
      <?php get_sidebar(); ?>
    </div>
  </div> <!-- /.row -->

<?php get_footer(); ?>
