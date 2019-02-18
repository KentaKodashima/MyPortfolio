      <?php get_header(); ?>

      <div class="container">
        <div class="appOverviewBox">
          <h1 class="appName"><?php the_title(); ?></h1>
          <div class="appInfo row">
            <div class="col-md-3 col-6 infoCol">
              <p class="appInfoLabel">Category:</p>
              <p class="appInfoContent"><?php the_field('category') ?></p>
            </div>
            <div class="col-md-3 col-6 infoCol">
              <p class="appInfoLabel">LANGUAGE:</p>
              <p class="appInfoContent"><?php the_field('language') ?></p>
            </div>
            <div class="col-md-3 col-6 infoCol">
              <p class="appInfoLabel">FEATURES:</p>
              <p class="appInfoContent"><?php the_field('features') ?></p>
            </div>
            <div class="col-md-3 col-6 infoCol">
              <p class="appInfoLabel">Production:</p>
              <p class="appInfoContent"><?php the_field('production') ?></p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="mainArea mainTop">
      <section id="summary" class="contentSection">
        <div class="container">
          <h2 class="sectionTitle">App Summary</h2>
          <div class="detailText">
            <p>
              <?php the_field('app_summary') ?>
            </p>
          </div>
        </div>
      </section>
      <?php if( have_rows('page_details') ): ?>
        <?php while( have_rows('page_details') ): the_row();
          $page_name = get_sub_field('page_name');
          $screenshotCount = count(get_sub_field('screenshots'));
          $screenshotClassName = "col-md-3 appScreenshotImg";
          if (get_field('category') == 'Website') {
            $screenshotClassName = "col-md-12 appScreenshotImg";
          }
        ?>
          <section class="contentSection">
            <div class="container">
              <h2 class="sectionTitle"><?php echo $page_name ?></h2>
              <?php if( have_rows('screenshots') ): ?>
                <ul class="row appScreenshots <?php if($screenshotCount < 4) { ?> justify-content-center <?php } ?>">
                  <?php while( have_rows('screenshots') ): the_row(); 
                    $screenshot = get_sub_field('screenshot');
                  ?>
                    <li class="<?php echo $screenshotClassName ?>">
                      <img src="<?php echo $screenshot['url'] ?>" alt="<?php echo $screenshot['alt'] ?>">
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
              <div class="detailText">
                <?php if( have_rows('page_descriptions') ): ?>
                  <ol>
                    <?php while( have_rows('page_descriptions') ): the_row(); 
                      $page_description = get_sub_field('page_description');
                    ?>
                      <li><?php echo $page_description ?></li>
                    <?php endwhile; ?>
                  </ol>
                <?php endif; ?>
              </div>
            </div>
          </section>
        <?php endwhile; ?>
      <?php endif; ?>
      <section id="marketingButtons">
        <div class="container">
          <div class="githubArea">
            <a class="githubButton" href="<?php the_field('github') ?>" target="_blank">
              <i class="fab fa-github"></i>Src on Github
            </a>
          </div>
          <div class="appStoreArea">
          <?php
            $app_store_info = get_field('app_store_info');
			$app_link = $app_store_info['app_store_link'];
            if( $app_store_info ):
              if( $app_store_info['app_store_badge'] ):
          ?>
            <a href="<?php echo $app_link ?>" target="_blank" class="appStoreButton">
              <div id="appStoreButtonImg" class="<?php if ( get_field('category') == 'Android' ) { ?> google <?php } ?>">
                <img alt='<?php echo $app_store_info['app_store_badge']['alt'] ?>' src='<?php echo $app_store_info['app_store_badge']['url'] ?>' />
              </div>
            </a>
            <?php endif; ?>
          <?php endif; ?>
          </div>
        </div>
      </section>
    </div>
    
    <?php get_footer() ?>