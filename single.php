
<?php get_header(); ?>




  <!-- Main -->
    <div id="main">

      <!-- THE LOOP -->
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

        <!-- Post -->
          <article class="post" id="post-<?php the_ID(); ?>">
            <header>
              <div class="title">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <!-- <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p> -->
              </div>
              <div class="meta">
                <time class="published" datetime="2015-11-01"><?php the_time('j F Y') ?></time>
                <div class="author"><span class="name"><?php the_author() ?></span><?php echo get_avatar(get_the_author_meta( 'ID' ), 96, false ); ?></div>
              </div>
            </header>

            <!-- Featured Image -->
            <?php if ( has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="image featured" >
                <?php the_post_thumbnail( array( 840, 341 ) ); ?>
              </a>
            <?php endif; ?>

            <!-- Contenu abrégé -->
            <?php the_content(); ?>

            <footer>
              <!-- <ul class="actions">
                <li><a href="#" class="button big">Continue Reading</a></li>
              </ul> -->
              <ul class="stats">
                <li>Publié dans la catégorie : <?php the_category(', ') ?></li>
                </br>
                </br>
                <li><span><?php comments_template(); ?></span></li>
              </ul>
            </footer>
          </article>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>



  <?php get_sidebar(); ?>
