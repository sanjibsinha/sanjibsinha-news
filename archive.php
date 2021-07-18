<?php get_header( ); ?>
<main class="container">
  <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">
      <?php
      /*
      if (is_author()) {
          echo "Posts by "; the_author( );
      }
      if (is_category()) {
          single_cat_title( );
      }
      */
      the_archive_title( );
      ?>
      </h1>
      <div class="page-banner__intro">
        <p><?php the_archive_description( ); ?></p>
      </div>
    </div>  
  
  <div class="row g-5">
    <div class="col-md-8">

    <?php 
  while (have_posts()) {
    the_post(); ?>
    <div class="post-item">
    <h1 class="headline headline--medium headline--post-title">
		<?php the_title(); ?></h1>
    </div>
    <div class="metabox">
    <h4>Posted by 
    <?php the_author_posts_link(); ?>
    on
    <?php the_time( 'd.m.y' ) ?>
    in
    <?php echo get_the_category_list(', '); ?>
    </h4>
    </div>
    <div class="generic-content">
    <?php the_excerpt(); ?>
    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">
    Continue Reading &raquo;</a>    
    </p><p></p>
    </div>

  <?php
  }
  echo paginate_links(  );
  ?>
      

      

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h2 class="fst-italic">কিছু কথা</h2>
          <p class="mb-0">
			এই দেশ বা রাজ্যের বাইরেও একটা বড় জগত অ‍াছে। কিছুটা দেখা যায়। শোনা যায়। বেশিটাই থাকে অনুভূতিতে। সেই জগতটাকেই ধরার একটা দুর্বল চেষ্টা।
			</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="https://github.com/sanjibsinha/">GitHub</a></li>
            <li><a href="https://twitter.com/sanjibsinha/">Twitter</a></li>
            
          </ol>
        </div>
      </div>
    </div>
  

	</div>
</main>

<?php get_footer( ); ?>
