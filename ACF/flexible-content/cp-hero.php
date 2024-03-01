<section class="hero">
    <div class="overlay"></div>
    <img
  src="<?php echo $cp->hero_image['url']; ?>"
  alt="<?php echo $cp->hero_image['filename']; ?>"
  srcset="
  <?php echo $cp->hero_image['sizes']['medium']; ?> 400w,
    <?php echo $cp->hero_image['sizes']['medium']; ?> 768w,
    <?php echo $cp->hero_image['url'] ?> 1517w"
  sizes="(max-width: 1517px) 100vw, 1517px"
  width="1517"
  height="911"
>
    <div class="hero__wrapper">
        <h1 class="hero__title"><?php echo $cp->hero_title ?></h1>
        <h2 class="hero__subtitle"><?php echo $cp->hero_subtitle ?></h2>
        
        <div class="link-wrapper">
            <a href="<?php echo $cp->hero_call_to_action['url'] ?>" class="hero__link"><?php echo $cp->hero_call_to_action['title'] ?></a>
        </div>
    </div>
</section>
