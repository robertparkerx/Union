<?php
/**
 * Created by PhpStorm.
 * User: exact
 * Date: 7/2/2017
 * Time: 2:30 AM
 */ ?>
<div id="page-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2"><?php the_title(); ?></h1>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?php the_post_thumbnail_url('large'); ?>" alt="Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 306px, 0px);"></div>
  </div>
