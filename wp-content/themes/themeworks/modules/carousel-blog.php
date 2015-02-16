<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <!-- Loop here  ne pas oublier .active-->
  <div class="carousel-inner">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="item active ">
        <?php //the_post_thumbnail('thumbnail', array('class' => 'carousel-image')) ?>

        <h1><?php the_title(); ?></h1>

    </div>
    <?php endwhile; else :?>
    <p>Aucun article. Revenez plus tard...</p>    
  <?php endif; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
