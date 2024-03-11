<?php

$title = $cp->hero_title;
$subtitle = $cp->hero_subtitle;
$call_to_action = $cp->first_call_to_action;
$second_call_to_action = $cp->second_call_to_action;
$image = $cp->hero_image;

?>


<section class="hero">
  <div class="hero__info box">
    <div class="wrapper">
      <?php if (isset($title)): ?>
        <h1><?php echo $title ?></h1>
        <?php endif ?>
        
        <?php if (isset($subtitle)): ?>
          <p><?php echo $subtitle ?></p>
        <?php endif ?>

        <div class="buttons">
          <?php if(isset($call_to_action)):?>
            <a class="btn-1" href="<?php echo $call_to_action['url']; ?>"><?php echo $call_to_action['title']; ?></a>
          <?php endif;?>

          <?php if(isset($second_call_to_action)):?>
            <a class="btn-2" href="<?php echo $second_call_to_action['url']; ?>"><?php echo $second_call_to_action['title']; ?></a>
          <?php endif?>
          </div>
      </div>
  </div>
  <div class="hero__image box">
    <?php if(isset($image)):?>
      <img src="<?php echo $image['url']?>" alt="<?php echo $image['filename']?>">
    <?php endif?>
  </div>
</section>