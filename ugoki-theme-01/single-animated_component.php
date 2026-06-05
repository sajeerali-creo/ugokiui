<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

  <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>

  <section class="section-bg top-padding-mb pb-48">
    <div class="container fix-dot">

      <div class="row justify-content-between align-items-center">

        <!-- IMAGE -->
        <div class="col-lg-5 mb-24">
          <div class="compo-box">

            <div class="new-label">
              <i></i>
              New
            </div>

            <?php if ($image) : ?>
              <img src="<?php echo esc_url($image); ?>" alt="<?php the_title_attribute(); ?>" />
            <?php endif; ?>

          </div>
        </div>

        <!-- TITLE -->
        <div class="col-lg-6 mb-24">
          <h1 class="h2 mb-24 w-auto w-lg-70"><?php the_title(); ?></h1>

          <p><?php echo get_the_excerpt(); ?></p>

          <div class="mt-24 btn-container">
            <a href="<?php echo esc_url( get_field('figma_library') ); ?>" class="btn-primary">
              Open in Figma <img src="/wp-content/uploads/2026/05/figma.svg" />
            </a>

            <a href="<?php echo esc_url( get_field('github_url') ); ?>" class="bt-s-auto">
              Download .fig <img src="/wp-content/uploads/2026/05/download.svg" />
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>

  <section class="pb-48">
    <div class="container border-top pt-48">

      <div class="row">

        <div class="col-lg-6">
          <h4 class="mb-48">How to Use (Very Simple Steps)</h4>
          <div class="d-flex g-3 mt-24 list-step align-items-center mb-48">
            <div class="number">1</div>
            <div>
              <h4>Browse Components</h4>
              <p class="mt-4 opacity-60">
                Explore a wide collection of free animated UI components made
                for modern design systems.
              </p>
            </div>
          </div>
          <div class="d-flex g-3 list-step align-items-center mb-48">
            <div class="number">2</div>
            <div>
              <h4>Open in Figma</h4>
              <p class="mt-4 opacity-60">
                Click any component and instantly open it in Figma. No setup
                required.
              </p>
            </div>
          </div>
          <div class="d-flex g-3 list-step align-items-center mb-48">
            <div class="number">3</div>
            <div>
              <h4>Copy the Component</h4>
              <p class="mt-4 opacity-60">
                Duplicate or copy the component into your own Figma file with
                one click.
              </p>
            </div>
          </div>
          <div class="d-flex g-3 list-step align-items-center mb-48">
            <div class="number">4</div>
            <div>
              <h4>Use in Your Project</h4>
              <p class="mt-4 opacity-60">
                Drag and drop into your design. Customize it and use it freely
                in your product or UI.
              </p>
            </div>
          </div>
          <div class="d-flex g-3 list-step align-items-center mb-48">
            <div class="number">5</div>
            <div>
              <h4>Browse Components</h4>
              <p class="mt-4 opacity-60">
                Explore a wide collection of free animated UI components made
                for modern design systems.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">

          <div class="box-use mb-24">
            <h4>Tags</h4>

            <div class="d-flex g-2 mt-16 flex-wrap category-tags">

              <?php
              $terms = get_the_terms(get_the_ID(), 'component_category');

              if ($terms && !is_wp_error($terms)) :
              ?>
                <div class="component-category">
                  <?php foreach ($terms as $term) : ?>
                    <span><?php echo esc_html($term->name); ?></span>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>

          </div>

          <h4>License</h4>
          <p class="mt-4 opacity-60 paragraph-s">
            Free to use for personal and commercial projects.
          </p>

        </div>

      </div>

    </div>
  </section>

<?php endwhile; ?>

<?php get_footer(); ?>
