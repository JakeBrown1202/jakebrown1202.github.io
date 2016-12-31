<?php
/* Short and sweet */
define('WP_USE_THEMES', false);
require('./blog/wp-blog-header.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Creating the big life!</title>
  <meta name="viewport" content="user-scalable=yes">
  <meta name="author" content="Alison McCloskey">
  <meta name="keywords" content="Creating the big life!">
  <meta name="description" content="Learn how to make your life great!">
  <meta name="DC.Language" content="en">
  <meta name="DC.Creator" content="Jake Brown">
  <meta name="DC.Subject" content="Life coaching">
  <meta property="og:type" content="website">
  <meta property="og:image" content="">
  <link rel="stylesheet" href="style.css">

  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/animations.css" rel="stylesheet">
  <link href="font.css" rel="stylesheet">
</head>

<style>

/* GENERAL CSS
–––––––––––––––––––––––––––––––––––––––––––––––––– */

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: #456990;
  color: #fff;
  overflow-x: hidden;
  padding-bottom: 50px;
}

/* INTRO SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.intro {
  background: #F45B69;
  font-family: 'whipsmartregular';
  padding: 100px 0;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

h1 {
  font-size: 2.5rem;
}

/* INFO SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.info {
  background: #F45B69;
  font-family: 'whipsmartregular';
  padding: 100px 0;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

h1 {
  font-size: 2.5rem;
}


/* TIMELINE
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline ul {
  background: #456990;
  font-family: 'whipsmartregular';
  padding: 50px 0;
}

.timeline ul li {
  list-style-type: none;
  position: relative;
  width: 6px;
  margin: 0 auto;
  padding-top: 50px;
  background: #fff;
}

.timeline ul li::after {
  content: '';
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: inherit;
}

.timeline ul li div {
  position: relative;
  bottom: 0;
  width: 400px;
  padding: 15px;
  background: #F45B69;
}

.timeline ul li div::before {
  content: '';
  position: absolute;
  bottom: 7px;
  width: 0;
  height: 0;
  border-style: solid;
}

.timeline ul li:nth-child(odd) div {
  left: 45px;
}

.timeline ul li:nth-child(odd) div::before {
  left: -15px;
  border-width: 8px 16px 8px 0;
  border-color: transparent #F45B69 transparent transparent;
}

.timeline ul li:nth-child(even) div {
  left: -439px;
}

.timeline ul li:nth-child(even) div::before {
  right: -15px;
  border-width: 8px 0 8px 16px;
  border-color: transparent transparent transparent #F45B69;
}

time {
  display: block;
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 8px;
}

/* FOOTER SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.footer-bar {
  bottom: 0;
  width: 100%;
  height: 60px;
  background-color: #4c4c4c;
}

.footer-text {
  font-size: 20px;
  font-family: 'luckiest_guyregular';
  color: #999;
  margin-top: 20px;
}

</style>


<body>

  <section class="intro">
    <div class="container">
      <div class = "animated fadeInRight delay1 speed0-4">
        <h1>Creating the big life.</h1>
        <h2>How to make your life better, from many differant angles.
      </div>
      <br>
      <br>
      <img src = "img/quote1.png" class = "well animated speed1 bounceInLeft">
    </div>
  </section>

  <section class="nav">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Main Menu</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Relationships</a></li>
            <li><a href="#">Parenting</a></li>
            <li><a href="#">Coaching</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./blog">Blog</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Terms and Conditions</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </section>

  <section class="timeline">
    <ul>
      <li>
        <div class = "animated speed1 bounceInLeft">
          <time>Parenting</time> Testing parenting block.
        </div>
      </li>
      <li>
        <div class = "animated speed1 bounceInRight">
          <time>Relationships</time> Testing relationships block.
        </div>
      </li>
      <li>
        <div class = "animated speed1 bounceInLeft">
          <time>Coaching</time> Testing the coaching block.
        </div>
      </li>
    </ul>
  </section>

  <section id="info" class="info">
    <h1 class="hidden">Tweets</h1>
    <br>
    <div class="container">
      <section id="newscontent" class="col-xs-8">
        <h2 class="text-white">Latest Tweets</h2>
        <a href="https://twitter.com/alicoaching" data-chrome="noheader nofooter transparent noscrollbar" data-tweet-limit="1" link-color="#43ac6a" class="twitter-timeline">Tweets by @alicoaching</a>
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </section>
      <section id="sidebar" class="col-xs-4 content-container">
        <div class="content-inner">
          <h2>Latest Blog Posts</h2>
          <?php
          // Get the last 3 posts.
          global $post;
          $args = array( 'posts_per_page' => 3 );
          $myposts = get_posts( $args );

          foreach( $myposts as $post ) :	setup_postdata($post); ?>

          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <?php the_title(); ?></a><br />
        <?php endforeach; ?>

        </div>
      </section>
	</div>
  </section>

  <div class="footer-bar" style="background-color: rgba(0, 0, 0, 0.4);">
    <div class="container">
      <p class="footer-text">Copyright &copy; Alison McCloskey &bull; <a class="footer-link" href="http://cobalt-mc.com/contact">Contact</a> &bull; <a class="footer-link" href="http://cobalt-mc.com/privacy">Privacy</a> &bull; <a class="footer-link" href="http://cobalt-mc.com/terms">Terms </a>&bull; Website by Jake Brown</p>
    </div>
