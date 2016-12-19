<div id="page-homepage" class="container">
  <div id="skip-link">
    <a href="#main" class="element-invisible element-focusable"><?php print t('Skip to main content') ?></a>
  </div>
  <header class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <svg height="40" width="40">
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#727E9C;" transform="translate(20 35) rotate(90)" /><!-- north -->
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#727E9C;" transform="translate(20 5) rotate(90)" /><!-- south -->
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#727E9C;" transform="translate(5 20)" /><!-- west -->
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#727E9C;" transform="translate(35 20)" /><!-- east -->

          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#97BAD9;" transform="translate(9.125 9.125) rotate(45)" /><!-- north-west -->
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#97BAD9;" transform="translate(30.875 30.875) rotate(45)" /><!-- south-east -->
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#97BAD9;" transform="translate(30.875 9.125) rotate(-45)" /><!-- north-east -->
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#97BAD9;" transform="translate(9.125 30.875) rotate(-45)" /><!-- south-west -->

          <circle cx="0" cy="0" r="5" style="fill:#A6748A;" transform="translate(20 20)" />
          s
        </svg> 
      </a>
      <nav class="navbar-header">
        <?php if ($main_menu): ?>
          <?php print theme('links__system_main_menu', array('links' => menu_tree(variable_get('menu_main_links_source', 'main-menu')))); ?>
        <?php endif; ?>
      </nav>
    </div>
  </header>
  <div id="content" class="row">
    <div id="main_content" role="main" class="col-md-9">
      <div class="row">
        <?php if ($page['highlighted']): ?><div id="mission"><?php print render ($page['highlighted']); ?></div><?php endif; ?>
        <?php print render($title_prefix); ?>
        <?php if ($title): if ($is_front){ print '<h2 class="title">'. $title .'</h2>'; } else { print '<h1 class="title">'. $title .'</h1>'; } endif; ?>
        <?php print render($title_suffix); ?>
      </div>
      <div class="row">
        <div class="tabs"><?php print render($tabs); ?></div>
      </div>
      <div class="row">
        <?php print render($page['help']); ?>
        <?php print $messages ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php if ($page['content']) : ?><?php print render ($page['content']); ?><?php endif; ?>
        <?php print $feed_icons; ?>
      </div>
    </div><!-- #main_content -->
    <aside id="sidebar" class="col-md-3" role="complementary">
      <a href="https://secure.nationalmssociety.org/site/Donation2?df_id=55896&PROXY_ID=8643532&PROXY_TYPE=20&FR_ID=27080&s_src=BF_emailbadge&_ga=1.131583306.43404973.1464564988" target="new" class="btn btn-primary col-md-12">Fight MS with me</a>
      <br>
      <br>
      <a href="https://www.learngreenflower.com/courses/10/cannabis-treat-substance-dependence-addiction-amanda-reiman" target="new" class="btn btn-primary col-md-12" title="Green Flower Media">Treating Substance Addiction</a>
    </aside><!-- #sidebar -->
  </div><!-- #content -->
</div><!-- #homepage -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="<?php print resp_class(); ?>1-5"><?php if (theme_get_setting('social_links_display')): ?><div id="soclinks"><?php print social_links(); ?></div><?php endif; ?></div>
        <div class="<?php print resp_class(); ?>3-5"><?php if ($page['footer']): ?><?php print render ($page['footer']); ?><?php endif; ?></div>
        <div class="<?php print resp_class(); ?>1-5"></div>
      </div>
    </div>
  </div>
</footer>