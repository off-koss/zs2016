<!--.page -->
<div role="document" class="page">

  <!--.l-header -->
  <!-- <header role="banner">
    <section class="top-black-menu">
      <div class="site-name left">
        <h1>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
            <i class="fa fa-camera-retro"></i>&nbsp;Павел Немзоров
          </a>
        </h1>
      </div>
      <div class="menu-center">
        <?php
          print theme('links__system_main_menu',
            array(
              'links' => $main_menu,
              'attributes' => array(
                'id' => 'main-menu',
                'class' => array('links', 'inline', 'show-for-large-up'))));
        ?>
      </div>
      <div class="phone right show-for-large-up">
        <a href="tel:+79214031197">
          +7&nbsp;(921)&nbsp;403-11-97
        </a>
      </div>
      <div class="mobile-menu right hide-for-large-up">
        <a href="#" data-reveal-id="mobile-menu"><i class="fa fa-bars"></i></a>
      </div>
    </section>

  </header> -->
  <!--/.l-header -->

  <!--.l-main -->
  <main role="main" class="l-main">
    <div class="large-12 columns">
      <div class="sidebar hide-for-small">
        <a href="/"><img src="/<?php print path_to_theme(); ?>/logo.png" /></a>
        <?php
          print theme('links__system_main_menu',
            array(
              'links' => $main_menu,
              'attributes' => array(
                'id' => 'main-menu',
                'class' => array('side-nav'))));
        ?>

        <div class="icon-bar four-up">
          <a class="item" href="https://vk.com/pavelphoto">
            <i class="fa fa-vk fa-2x"></i>
          </a>
          <a class="item" href="https://www.facebook.com/photopavel">
            <i class="fa fa-facebook fa-2x"></i>
          </a>
          <a class="item" href="https://vk.com/pavelphoto">
            <i class="fa fa-instagram fa-2x"></i>
          </a>
          <a class="item" href="https://vk.com/pavelphoto">
            <i class="fa fa-vimeo fa-2x"></i>
          </a>
        </div>
      </div>

    <!-- .l-main region -->
    <div class="main">
      <?php if (!empty($page['featured'])): ?>
        <!--.l-featured -->
        <section class="l-featured row">
          <div class="columns">
            <?php print render($page['featured']); ?>
          </div>
        </section>
        <!--/.l-featured -->
      <?php endif; ?>

      <?php if ($messages && !$zurb_foundation_messages_modal): ?>
        <!--.l-messages -->
        <section class="l-messages row">
          <div class="columns">
            <?php if ($messages): print $messages; endif; ?>
          </div>
        </section>
        <!--/.l-messages -->
      <?php endif; ?>

      <?php if (!empty($page['help'])): ?>
        <!--.l-help -->
        <section class="l-help row">
          <div class="columns">
            <?php print render($page['help']); ?>
          </div>
        </section>
        <!--/.l-help -->
      <?php endif; ?>


      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <?php if ($title): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>

      <!--.l-footer -->
      <footer role="contentinfo">
        <hr />
        <div class="row">
          <div class="large-9 small-12 columns">
            <div class="copyright">
              Zaplay Studio
              <br />&copy; 2015&nbsp;&mdash; <?php print date('Y'); ?>. Все права защищены.
              <br />Использование материалов сайта без разрешения запрещено.
            </div>
          </div>
          <div class="large-3 small-12 columns">
            <div class="madeby right text-right">
              Разработка сайта<br /><a href="https://kossoff.ru/"><i class="fa fa-rocket"></i> Kossoff.ru</a>
            </div>
          </div>
        </div>
      </footer>
      <!--/.l-footer -->
    </div></div>
    <!--/.l-main region -->
  </main>
  <!--/.l-main -->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->

<div id="mobile-menu" class="reveal-modal" data-reveal role="dialog">
  <div class="lead">Zaplay Studio</div>
  <hr />
  <?php
  print theme('links__system_main_menu',
    array(
      'links' => $main_menu,
      'attributes' => array(
        'class' => array('no-bullet'))));
  ?>
  <a class="close-reveal-modal">&times;</a>
</div>
