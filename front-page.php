<?php
/**
 * Faith Formers — Front Page Template
 * Design v10 — Syne + Instrument Sans, teal/blue/magenta on cream
 * Deploy: ~/Sites/faith-formers/front-page.php
 */
get_header(); ?>

<main id="ff-home">

  <!-- ═══════════════════════════════════════
       HERO
  ═══════════════════════════════════════ -->
  <section class="ff-hero">
    <div class="ff-hero__text">
      <p class="ff-eyebrow">Catholic faith formation</p>
      <h1 class="ff-hero__h1">Faith that lives<br>in your <em>everyday.</em></h1>
      <p class="ff-hero__sub">Formation isn't just for Sunday morning. It belongs in the kitchen, on the hard days, through every season of life.</p>
      <div class="ff-hero__btns">
        <a href="#ff-guide" class="ff-btn ff-btn--mg">Get the free guide</a>
        <a href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>" class="ff-btn ff-btn--plain">Browse articles →</a>
      </div>
    </div>
    <div class="ff-hero__media">
      <?php
      $hero_img = get_theme_mod('ff_hero_image');
      if ( $hero_img ) : ?>
        <img src="<?php echo esc_url($hero_img); ?>" alt="Anna Forsberg speaking" class="ff-hero__img">
      <?php else : ?>
        <div class="ff-hero__img-placeholder">
          <span>Anna speaking<br><small>Add image in Customizer</small></span>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <div class="ff-divider"></div>

  <!-- ═══════════════════════════════════════
       HEART
  ═══════════════════════════════════════ -->
  <section class="ff-path-row ff-path-row--heart">
    <div class="ff-path-row__media ff-path-row__media--teal">
      <?php
      $heart_img = get_theme_mod('ff_heart_image');
      if ( $heart_img ) : ?>
        <img src="<?php echo esc_url($heart_img); ?>" alt="Heart formation">
      <?php else : ?>
        <div class="ff-path-row__img-ph">Heart imagery</div>
      <?php endif; ?>
      <span class="ff-path-row__num">01</span>
    </div>
    <div class="ff-path-row__text">
      <p class="ff-eyebrow ff-eyebrow--teal">Heart</p>
      <h2>Where formation <em>begins.</em></h2>
      <p>Your interior life is the headwaters. Prayer, Scripture, silence — everything flows from here. Formation starts in the heart before it reaches anyone else.</p>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path('heart') ) ); ?>" class="ff-btn ff-btn--teal">Explore Heart →</a>
    </div>
  </section>

  <div class="ff-divider ff-divider--flush"></div>

  <!-- ═══════════════════════════════════════
       HOME
  ═══════════════════════════════════════ -->
  <section class="ff-path-row ff-path-row--home ff-path-row--flip">
    <div class="ff-path-row__media ff-path-row__media--blue">
      <?php
      $home_img = get_theme_mod('ff_home_image');
      if ( $home_img ) : ?>
        <img src="<?php echo esc_url($home_img); ?>" alt="Home formation">
      <?php else : ?>
        <div class="ff-path-row__img-ph">Home imagery</div>
      <?php endif; ?>
      <span class="ff-path-row__num">02</span>
    </div>
    <div class="ff-path-row__text">
      <p class="ff-eyebrow ff-eyebrow--blue">Home</p>
      <h2>The domestic <em>church.</em></h2>
      <p>The home isn't a waiting room for real faith — it's where faith is lived. Rhythms for the family table, liturgical seasons, and the ordinary moments that become holy.</p>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path('home-life') ) ); ?>" class="ff-btn ff-btn--blue">Explore Home →</a>
    </div>
  </section>

  <div class="ff-divider ff-divider--flush"></div>

  <!-- ═══════════════════════════════════════
       PARISH
  ═══════════════════════════════════════ -->
  <section class="ff-path-row ff-path-row--parish">
    <div class="ff-path-row__media ff-path-row__media--mg">
      <?php
      $parish_img = get_theme_mod('ff_parish_image');
      if ( $parish_img ) : ?>
        <img src="<?php echo esc_url($parish_img); ?>" alt="Parish formation">
      <?php else : ?>
        <div class="ff-path-row__img-ph">Parish imagery</div>
      <?php endif; ?>
      <span class="ff-path-row__num">03</span>
    </div>
    <div class="ff-path-row__text">
      <p class="ff-eyebrow ff-eyebrow--mg">Parish</p>
      <h2>Made for <em>communion.</em></h2>
      <p>We weren't made to do this alone. The parish is where private formation goes public — ancient, alive, and yours to inhabit fully.</p>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path('parish') ) ); ?>" class="ff-btn ff-btn--mg">Explore Parish →</a>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       ABOUT ANNA
  ═══════════════════════════════════════ -->
  <section class="ff-anna">
    <div class="ff-anna__inner" style="display:grid;grid-template-columns:1fr 1fr;align-items:center;max-width:1200px;margin:0 auto;padding:0 clamp(24px,5vw,64px);">
      <div class="ff-anna__text">
        <p class="ff-eyebrow ff-eyebrow--mg">Meet your guide</p>
        <h2>Hi, I'm <em>Anna.</em></h2>
        <div class="ff-anna__rule"></div>
        <p>I'm a wife, mum, and Catholic formation nerd with a dual degree in theology and education from Leeds. I started my career teaching in Catholic schools — and somewhere along the way, teaching faith became my whole life's work.</p>
        <p>For years I've walked alongside families, parishes, and individuals helping them move from going-through-the-motions to genuinely on-fire faith. Not performance. Not perfection. Just real encounter with a living God.</p>
        <p>Faith Formers is where I bring all of it together — retreats, resources, and a community that takes this seriously.</p>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path('about') ) ); ?>" class="ff-anna__cta">Read Anna's full story →</a>
        <blockquote class="ff-anna__quote">
          <p>"Formation isn't a program. It's a relationship with a person — Jesus."</p>
          <cite>— Anna Forsberg</cite>
        </blockquote>
      </div>
      <div class="ff-anna__photo" style="max-height:480px;min-height:0;">
        <?php
        $anna_img = get_theme_mod('ff_anna_portrait');
        if ( $anna_img ) : ?>
          <img src="<?php echo esc_url($anna_img); ?>" alt="Anna Forsberg">
        <?php else : ?>
          <div class="ff-anna__photo-ph">
            <span>Anna portrait<br><small>Add image in Customizer</small></span>
          </div>
        <?php endif; ?>
        <div class="ff-anna__photo-accent"></div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       GET THE GUIDE
  ═══════════════════════════════════════ -->
  <section class="ff-guide" id="ff-guide">
    <div class="ff-guide__left">
      <p class="ff-eyebrow" style="color:rgba(255,255,255,.4);">Free resource</p>
      <h2><?php echo esc_html( get_theme_mod( 'ff_featured_resource_title', 'Our One-Hour Retreat' ) ); ?></h2>
      <p class="ff-guide__sub"><?php echo esc_html( get_theme_mod( 'ff_featured_resource_desc', 'A retreat guide rooted in Lectio Divina — for anyone who wants a prayer life that actually holds. Yours free when you join.' ) ); ?></p>

      <?php if ( shortcode_exists('ff_email_signup') ) :
        echo do_shortcode('[ff_email_signup]');
      else : ?>
        <form class="ff-guide__form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
          <?php wp_nonce_field('ff_signup','ff_nonce'); ?>
          <input type="hidden" name="action" value="ff_email_signup">
          <div class="ff-guide__form-row">
            <input type="email" name="email" class="ff-guide__input" placeholder="Your email address" required>
            <button type="submit" class="ff-guide__btn">Send it →</button>
          </div>
        </form>
      <?php endif; ?>

      <p class="ff-guide__fine">No spam. Unsubscribe anytime.</p>
      <p class="ff-guide__dm">Or DM <strong>HEART</strong> on Instagram for instant access.</p>
    </div>
    <div class="ff-guide__right" aria-hidden="true">
      <div class="ff-guide__right-title">Listen-<br>ing<br><span>With the<br>Heart</span></div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       ARTICLES
  ═══════════════════════════════════════ -->
  <section class="ff-articles">
    <div class="ff-articles__head">
      <h2 class="ff-articles__h2">Articles &<br>reflections</h2>
      <div class="ff-articles__head-right">
        <p class="ff-eyebrow ff-eyebrow--teal">From the blog</p>
        <a href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>" class="ff-articles__viewall">View all articles →</a>
      </div>
    </div>

    <?php
    $recent = new WP_Query([
      'post_type'      => 'post',
      'posts_per_page' => 4,
      'post_status'    => 'publish',
    ]);

    $post_index = 0;
    $colors = ['teal', 'blue', 'mg'];

    if ( $recent->have_posts() ) :
      $posts_arr = $recent->posts;
      $featured  = $posts_arr[0];
      $secondary = array_slice($posts_arr, 1, 3);
    ?>

    <?php /* Featured */ ?>
    <article class="ff-article-featured">
      <div class="ff-article-featured__img ff-article-featured__img--teal">
        <?php if ( has_post_thumbnail($featured->ID) ) : ?>
          <?php echo get_the_post_thumbnail($featured->ID, 'large'); ?>
        <?php endif; ?>
        <span class="ff-article-featured__num">01</span>
      </div>
      <div class="ff-article-featured__body">
        <?php
        $cats = get_the_category($featured->ID);
        if ($cats) : ?>
          <span class="ff-badge ff-badge--teal"><?php echo esc_html($cats[0]->name); ?></span>
        <?php endif; ?>
        <h3><a href="<?php echo esc_url( get_permalink($featured->ID) ); ?>"><?php echo esc_html( get_the_title($featured->ID) ); ?></a></h3>
        <p><?php echo wp_trim_words( get_the_excerpt($featured->ID), 24, '…' ); ?></p>
        <a href="<?php echo esc_url( get_permalink($featured->ID) ); ?>" class="ff-article-featured__link">Read the full article →</a>
      </div>
    </article>

    <?php /* Secondary 3 */ ?>
    <div class="ff-articles__row">
      <?php foreach ( $secondary as $i => $post ) :
        $color = $colors[$i % 3];
        $cats  = get_the_category($post->ID);
      ?>
        <article class="ff-article-card">
          <div class="ff-article-card__img ff-article-card__img--<?php echo $color; ?>">
            <?php if ( has_post_thumbnail($post->ID) ) : ?>
              <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
            <?php endif; ?>
            <span class="ff-article-card__num"><?php echo str_pad($i+2, 2, '0', STR_PAD_LEFT); ?></span>
          </div>
          <div class="ff-article-card__body">
            <?php if ($cats) : ?>
              <span class="ff-badge ff-badge--<?php echo $color; ?>"><?php echo esc_html($cats[0]->name); ?></span>
            <?php endif; ?>
            <h3><a href="<?php echo esc_url( get_permalink($post->ID) ); ?>"><?php echo esc_html( get_the_title($post->ID) ); ?></a></h3>
            <p><?php echo wp_trim_words( get_the_excerpt($post->ID), 16, '…' ); ?></p>
            <a href="<?php echo esc_url( get_permalink($post->ID) ); ?>" class="ff-article-card__link">Read more →</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <?php wp_reset_postdata(); endif; ?>

  </section>

</main>

<?php get_footer(); ?>
