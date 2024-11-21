<?php

$title = $cp->hero_title;

?>


<section class="hero">
  <div class="hero__info box">
    <div class="wrapper">
      <?php if (!empty($title)): ?>
          <h1><?php echo $title ?></h1>
        <?php endif ?>

    </div>
    </div>
</section>