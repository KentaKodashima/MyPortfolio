
      <?php get_header(); ?>

      <div class="container">
        <div id="heroText">
          <h1 class="title">Kenta Kodashima</h1>
          <p class="subTitle">iOS Developer Based in Vancouver</p>
          <ul class="icons">
            <li><a href="https://github.com/KentaKodashima"><i class="fab fa-github"></i></a></li>
            <li><a href="https://www.linkedin.com/in/kenta-kodashima-61940611a/"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://medium.com/"><i class="fab fa-medium-m"></i></a></li>
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
            'post_type' => 'works'
          );
          $work_query = new WP_Query( $work_args );
        ?>
        <ul class="workList row cf">
          <?php while ( $work_query->have_posts() ) : $work_query->the_post(); ?>
          <li class="workItem col-md-4" ontouchstart="">
            <figure class="imgBox">
              <a href="<?php echo the_permalink(); ?>" class="imgBoxLink">
                <?php
                  $image_id = get_post_thumbnail_id();
                  $image_url = wp_get_attachment_image_src($image_id, true);
                ?>
                <img src="<?php echo $image_url[0]; ?>" alt="<?php echo get_the_title(); ?>">
                <figcaption class="mask">
                  <div class="maskContainer">
                    <h3 class="captionTitle"><?php echo the_title(); ?></h3>
                    <p class="captionDetail"><?php echo the_field('catch_text'); ?></p>
                  </div>
                </figcaption>
              </a>
            </figure>
          </li>
          <?php endwhile; ?>
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
              In July of 2018, I published my very first own project on the App Store. In order to deepen my knowledge,
              I study everyday using online courses and books.
            </p>
            <ul class="tags">
              <li class="tagItem">Xcode</li>
              <li class="tagItem">Swift</li>
              <li class="tagItem">Objective-c</li>
              <li class="tagItem">Cocoapods</li>
              <li class="tagItem">Realm(Swift)</li>
              <li class="tagItem">Firebase(Swift)</li>
            </ul>
          </div>
          <div class="thumbnail col-md-4">
            <p class="icons"><i class="fas fa-mobile-alt"></i></p>
            <p class="skillName">Android Development</p>
            <p class="description">
              Even though my interest is mainly in iOS development, I understand the basic concepts of Android
              development such as Fragment, Lifecycle, Activity etc. In September of 2018, I published my first Android
              app on the Google Play Store.
            </p>
            <ul class="tags">
              <li class="tagItem">Android Studio</li>
              <li class="tagItem">Java</li>
              <li class="tagItem">Realm(Java)</li>
              <li class="tagItem">Firebase(Java)</li>
            </ul>
          </div>
          <div class="thumbnail col-md-4">
            <p class="icons"><i class="fas fa-laptop-code"></i></p>
            <p class="skillName">Front-end Development</p>
            <p class="description">
              As a Front-end developer in a design studio, I built some website and HTML emails. When I build a
              website, I pay close attention
              to the details such as spacing in pixels and font-size. I love writing the beautifully formated code.
            </p>
            <ul class="tags">
              <li class="tagItem">HTML5</li>
              <li class="tagItem">CSS3</li>
              <li class="tagItem">Sass</li>
              <li class="tagItem">jQuery</li>
              <li class="tagItem">Bootstrap</li>
              <li class="tagItem">Gulp.js</li>
            </ul>
          </div>
          <div class="thumbnail col-md-4 noRightMargin">
            <p class="icons"><i class="fab fa-github"></i></p>
            <p class="skillName">Version Control with Git</p>
            <p class="description">
              Version control is an important factor in the process of the production. That's why I always leave the
              details when I commit
              and push to the repository. I understand the basic flow such as creating a development branch, fetch,
              merge, push, reset, stash and rebase.
            </p>
            <ul class="tags">
              <li class="tagItem">Github</li>
            </ul>
          </div>
          <div class="thumbnail col-md-4">
            <p class="icons"><i class="fas fa-paint-brush"></i></p>
            <p class="skillName">Design Applications</p>
            <p class="description">
              I know how to use applications for designing. When I was a front-end developer, I did trivial design
              adjustment using Photoshop.
              Icon materials on my iOS app called "Amtrip" are made using Sketch.
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
        <div class="thumbnails row cf">
          <div class="thumbnail col-md-4">
            <a href="https://www.raywenderlich.com/">
              <div class="thumbnailImg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/raywenderlichcom.png" alt="raywenderlich.com">
              </div>
              <p class="thumbnailText">
                <span class="resourceName">raywenderlich.com</span>
              </p>
            </a>
          </div>
          <div class="thumbnail col-md-4">
            <a href="https://www.facebook.com/apple.ios.developers/">
              <div class="thumbnailImg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ios_developers.png" alt="iOS developers facebook page">
              </div>
              <p class="thumbnailText">
                <span class="resourceName">iOS Developers Facebook Page</span>
              </p>
            </a>
          </div>
          <div class="thumbnail col-md-4">
            <a href="https://www.udemy.com/">
              <div class="thumbnailImg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/udemy.png" alt="Udemy">
              </div>
              <p class="thumbnailText">
                <span class="resourceName">Udemy</span>
              </p>
            </a>
          </div>
          <div class="thumbnail col-md-3 lastRow">
            <a href="https://store.raywenderlich.com/products/realm-building-modern-swift-apps-with-realm-database">
              <div class="thumbnailImg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/realm.png" alt="Realm: Building Modern Swift Apps with Realm Database">
              </div>
              <p class="thumbnailText">
                <span class="resourceName">Realm: Building Modern Swift Apps with Realm Database</span>
              </p>
            </a>
          </div>
          <div class="thumbnail col-md-3 lastRow">
            <a href="https://store.raywenderlich.com/products/rxswift">
              <div class="thumbnailImg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/rx_swift.png" alt="RxSwift">
              </div>
              <p class="thumbnailText">
                <span class="resourceName">RxSwift</span>
              </p>
            </a>
          </div>
          <div class="thumbnail col-md-3 lastRow">
            <a href="https://www.bignerdranch.com/books/swift-programming/">
              <div class="thumbnailImg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/swift_bignerdranch.jpg" alt="Swift Programming">
              </div>
              <p class="thumbnailText">
                <span class="resourceName">Swift Programming</span>
              </p>
            </a>
          </div>
          <div class="thumbnail col-md-3 lastRow">
            <a href="https://www.bignerdranch.com/books/ios-programming/">
              <div class="thumbnailImg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ios_bignerdranch.jpg" alt="iOS Programming">
              </div>
              <p class="thumbnailText">
                <span class="resourceName">iOS Programming</span>
              </p>
            </a>
          </div>
          <div class="thumbnail col-md-3 lastRow">
            <a href="https://store.raywenderlich.com/products/data-structures-and-algorithms-in-swift">
              <div class="thumbnailImg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/algorithm_in_swift.png" alt="Data Structures and Algorithms in Swift">
              </div>
              <p class="thumbnailText">
                <span class="resourceName">Data Structures and Algorithms in Swift</span>
              </p>
            </a>
          </div>
        </div>
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
              <p>I had been working as a Front-end web developer and director in a web design studio in Tokyo. Now I'm
                learning
                Android and iOS development at CICCC in Vancouver, seeking to get an opportunity as an iOS developer.</p>
              <p>I'm passionate about learning new things, sharing my knowledge, and making something useful thing for
                people.
                In order to share my knowledge, I write medium articles about what I learn from making apps.</p>
              <p>My recent interest is in RxSwift, Kotlin, React Native and Flutter.</p>
            </div>
            <ul class="icons">
              <li><a href="https://github.com/KentaKodashima"><i class="fab fa-github"></i></a></li>
              <li><a href="https://www.linkedin.com/in/kenta-kodashima-61940611a/"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="https://medium.com/"><i class="fab fa-medium-m"></i></a></li>
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