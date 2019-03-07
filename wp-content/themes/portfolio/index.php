<?php get_header(); ?>

<div class="container">
  <div id="heroText">
    <h1 class="title">Kenta Kodashima</h1>
    <p class="subTitle">Web and Mobile Developer Based in Vancouver</p>
    <ul class="icons">
      <li><a href="https://github.com/KentaKodashima"><i class="fab fa-github"></i></a></li>
      <li><a href="https://www.linkedin.com/in/kenta-kodashima-61940611a/"><i class="fab fa-linkedin-in"></i></a></li>
      <li><a href="https://medium.com/@KentaKodashima"><i class="fab fa-medium-m"></i></a></li>
      <li><a href="https://www.facebook.com/kenta.kodashima.5"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="https://twitter.com/kentakodashima"><i class="fab fa-twitter"></i></a></li>
    </ul>
  </div>
</div>
</header>
<section id="works" class="mainTop section">
<div class="container">
  <h2 class="sectionTitle">Works</h2>
  <?php
    $work_args = array(
      'post_type' => 'work'
    );
    $work_query = new WP_Query( $work_args );
  ?>
  <ul class="workList row cf">
    <?php if ( $work_query->have_posts() ) : while($work_query->have_posts()): $work_query->the_post(); ?>
    <li class="workItem col-md-4" ontouchstart="">
      <figure class="imgBox">
        <a href="<?php the_permalink(); ?>" class="imgBoxLink">
          <?php
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id, true);
          ?>
          <img src="<?php echo $image_url[0]; ?>" alt="<?php echo get_the_title(); ?>">
          <figcaption class="mask">
            <div class="maskContainer">
              <div class="maskButton">LEARN MORE</div>
            </div>
          </figcaption>
        </a>
        <div class="captionInfo">
          <h3 class="captionTitle"><?php the_title(); ?></h3>
          <p class="captionDetail"><?php the_field('catch_text'); ?></p>
        </div>
      </figure>
    </li>
    <?php endwhile; endif; ?>
  </ul>
  <?php wp_reset_postdata(); ?>
</div>
</section>
<section id="blogArticles" class="section">
<div class="container">
  <h2 class="sectionTitle">Popular Articles on My Blog</h2>
  <?php
    $blog_args = array(
      'post_type' => 'blog_article'
    );
    $blog_query = new WP_Query( $blog_args );
  ?>
  <ul class="workList row cf">
    <?php if ( $blog_query->have_posts() ) : while($blog_query->have_posts()): $blog_query->the_post(); ?>
    <li class="workItem col-md-4" ontouchstart="">
      <figure class="imgBox">
        <a href="<?php the_field('article_link'); ?>" class="imgBoxLink">
          <?php
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id, true);
          ?>
          <img src="<?php echo $image_url[0]; ?>" alt="<?php echo get_the_title(); ?>">
          <figcaption class="mask">
            <div class="maskContainer">
              <div class="maskButton">LEARN MORE</div>
            </div>
          </figcaption>
        </a>
        <div class="captionInfo">
          <h3 class="captionTitle"><?php the_title(); ?></h3>
          <p class="captionDetail"><?php the_field('blog_name'); ?></p>
        </div>
      </figure>
    </li>
    <?php endwhile; endif; ?>
  </ul>
  <?php wp_reset_postdata(); ?>
</div>
</section>
<section id="skills" class="section">
<div class="container">
  <h2 class="sectionTitle sectionTitleC">Skills</h2>
  <div class="thumbnails row cf">
    <div class="thumbnail col-md-4">
      <p class="icons"><i class="fas fa-mobile-alt"></i></p>
      <p class="skillName">iOS Development</p>
      <p class="description">
        I have solid knowledge about iOS development basics such as delegation pattern, MVC pattern, ARC system
        etc.
        In July of 2018, I published my very first own project on the App Store.
      </p>
      <ul class="tags">
        <li class="tagItem">Xcode</li>
        <li class="tagItem">Swift</li>
        <li class="tagItem">Objective-c</li>
        <li class="tagItem">Cocoapods</li>
        <li class="tagItem">Realm(Swift)</li>
        <li class="tagItem">Firebase(Swift)</li>
        <li class="tagItem">Publishing</li>
        <li class="tagItem">Common Libraries</li>
      </ul>
    </div>
    <div class="thumbnail col-md-4">
      <p class="icons"><i class="fas fa-mobile-alt"></i></p>
      <p class="skillName">Android Development</p>
      <p class="description">
        I understand the basic concepts of Android development such as Fragment, Lifecycle, Activity etc. In September of 2018, I published my first Android app on the Google Play Store.
      </p>
      <ul class="tags">
        <li class="tagItem">Android Studio</li>
        <li class="tagItem">Java</li>
        <li class="tagItem">Realm(Java)</li>
        <li class="tagItem">Firebase(Java)</li>
        <li class="tagItem">Publishing</li>
      </ul>
    </div>
    <div class="thumbnail col-md-4">
      <p class="icons"><i class="fas fa-laptop-code"></i></p>
      <p class="skillName">Front-end Development</p>
      <p class="description">
        As a Front-end developer in a design studio, I built some website and HTML emails. When I build a website, I pay close attention to the details such as spacing in pixels and  font-size. I love writing the beautifully formated code.
      </p>
      <ul class="tags">
        <li class="tagItem">HTML5</li>
        <li class="tagItem">CSS3</li>
        <li class="tagItem">Sass</li>
        <li class="tagItem">jQuery</li>
        <li class="tagItem">React.js</li>
        <li class="tagItem">Redux</li>
        <li class="tagItem">AWS/S3</li>
        <li class="tagItem">Bootstrap</li>
        <li class="tagItem">Gulp.js</li>
  <li class="tagItem">WordPress</li>
      </ul>
    </div>
    <div class="thumbnail col-md-4 noRightMargin">
      <p class="icons"><i class="fab fa-github"></i></p>
      <p class="skillName">Team Communication Tools</p>
      <p class="description">
        I always leave the details when I do git commit so that other developers can easily understand the changes. In order to communicate closely with team members, I make the most of tools such as Slack, Google Drive, Google Sheets, Google Docs and Zeplin.
      </p>
      <ul class="tags">
        <li class="tagItem">Github</li>
        <li class="tagItem">Slack</li>
        <li class="tagItem">Google Apps</li>
        <li class="tagItem">Zeplin</li>
      </ul>
    </div>
    <div class="thumbnail col-md-4">
      <p class="icons"><i class="fas fa-paint-brush"></i></p>
      <p class="skillName">Design Applications</p>
      <p class="description">
        I'm familiar with common applications for designing. When I was a front-end developer, I also did trivial design adjustment using Photoshop. Icon materials on my iOS app called "Amtrip" are made using Sketch.
      </p>
      <ul class="tags">
        <li class="tagItem">Photoshop</li>
        <li class="tagItem">Illustrator</li>
        <li class="tagItem">Sketch</li>
      </ul>
    </div>
  </div>
</div>
</section>
<section id="resources" class="section">
<div class="container">
  <h2 class="sectionTitle">My Study Resources</h2>
  <?php
    $website_args = array(
      'post_type' => 'resources_website'
    );
    $website_query = new WP_Query( $website_args );

    $book_args = array(
      'post_type' => 'resources_book'
    );
    $book_query = new WP_Query( $book_args );
  ?>
    <div class="thumbnails row cf">
      <?php if ( $website_query->have_posts() ) : while($website_query->have_posts()): $website_query->the_post(); ?>
        <div class="thumbnail col-md-3">
          <div class="thumbnailImg">
            <?php
              $image_id = get_post_thumbnail_id();
              $image_url = wp_get_attachment_image_src($image_id, true);
            ?>
            <img src="<?php echo $image_url[0]; ?>" alt="<?php echo get_the_title(); ?>">
          </div>
          <p class="thumbnailText">
            <span class="resourceName"><?php the_title(); ?></span>
          </p>
        </div>
      <?php endwhile; endif; ?>
    </div>
    <div class="thumbnails row cf">
      <?php if ( $book_query->have_posts() ) : while($book_query->have_posts()): $book_query->the_post(); ?>
        <div class="thumbnail col-md-3 lastRow">
          <div class="thumbnailImg">
            <?php
              $image_id = get_post_thumbnail_id();
              $image_url = wp_get_attachment_image_src($image_id, true);
            ?>
            <img src="<?php echo $image_url[0]; ?>" alt="<?php echo get_the_title(); ?>">
          </div>
          <p class="thumbnailText">
            <span class="resourceName"><?php the_title(); ?></span>
          </p>
        </div>
      <?php endwhile; endif; ?>
    </div>
  <?php wp_reset_postdata(); ?>
</div>
</section>
<section id="profile" class="section">
<div class="container">
  <div class="row">
    <div class="col-md-4 profileImg">
      <img src="<?php echo get_template_directory_uri(); ?>/img/profile_img.jpg" alt="Picture of my self">
    </div>
    <div class="col-md-8">
      <h3 class="sectionTitle sectionTitleC">Kenta Kodashima</h3>
      <div class="profileText">
        <p>I had been working as a front-end web developer and project manager in a web design studio in Tokyo. Now I'm completing a Web and Mobile App Development diploma at a college in Vancouver, seeking to get an opportunity as an iOS developer or a front-end web developer.</p>
        <p>I'm passionate about learning new things, sharing my knowledge, and making something useful thing for people. In order to share my knowledge, I write medium articles about what I learn from making apps.</p>
        <p>My recent interest is in Docker, Node.js, MongoDB, MySQL, RxSwift, Kotlin, React Native and Flutter.</p>
      </div>
      <ul class="icons">
        <li><a href="https://github.com/KentaKodashima"><i class="fab fa-github"></i></a></li>
        <li><a href="https://www.linkedin.com/in/kenta-kodashima-61940611a/"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="https://medium.com/@KentaKodashima"><i class="fab fa-medium-m"></i></a></li>
        <li><a href="https://www.facebook.com/kenta.kodashima.5"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://twitter.com/kentakodashima"><i class="fab fa-twitter"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</section>
<section id="contact" class="section">
<div class="container">
  <h2 class="sectionTitle">Contact</h2>
  <div class="content">
    <p class="greetingText">
      Thank you for visiting this website.<br> Currently, I'm looking for a job opportunity as an iOS developer.<br>
      Please
      feel free to contact me.
    </p>
    <a class="contactButton" href="mailto:kentakodashima@gmail.com">
      Send me an email
    </a>
  </div>
</div>
</section>

<?php get_footer(); ?>