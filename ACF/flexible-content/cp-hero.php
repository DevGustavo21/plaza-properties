<?php 

$title = $cp->hero_title;
$subtitle = $cp->hero_subtitle;
$call_to_action = $cp->hero_call_to_action;
$image = $cp->hero_image;

?>

<section class="hero">
  <div class="hero__info box">
    <?php if(isset($title)):?>
      <h1><?php echo $title ?></h1>
    <?php endif?>
  </div>
  <div class="hero__image box"></div>
</section>