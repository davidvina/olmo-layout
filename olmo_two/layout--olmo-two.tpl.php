<?php
/**
 * @file
 * Template for a 2 column layout.
 *
 * This template provides a two column layout with the sidebar on the left and
 * a roughly 60/40 split.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: Array of additional HTML attributes to be added to the layout
 *     wrapper. Flatten using backdrop_attributes().
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following sections:
 *   - $content['header']
 *   - $content['top']
 *   - $content['content']
 *   - $content['sidebar']
 *   - $content['bottom']
 *   - $content['footer']
 */
?>
<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="main-header" role="banner" aria-label="<?php print t('Site header'); ?>">
      <?php print $content['header']; ?>
    </header>
  <?php endif; ?>

  <?php if ($content['top']): ?>
    <div class="main-top-area">
      <?php print $content['top']; ?>
    </div>
  <?php endif; ?>

  <?php if ($messages): ?>
    <div class="l-messages">
      <?php print $messages; ?>
    </div>
  <?php endif; ?>

  <div class="main-container">
    <div class="container">

      <main class="main-content-wrapper" role="main">
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="page-title">
            <?php print $title; ?>
          </h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

        <?php if ($tabs): ?>
          <div class="tabs">
            <?php print $tabs; ?>
          </div>
        <?php endif; ?>

        <?php print $action_links; ?>
        <?php print $content['content']; ?>
      </main> <!-- .main-content-wrapper -->

      <?php if ($content['sidebar']): ?>
        <div class="main-sidebar">
          <?php print $content['sidebar']; ?>
        </div> <!-- .main-sidebar -->
      <?php endif; ?>
  
    </div>
  </div> <!-- .main-container -->

  <?php if ($content['bottom']): ?>
    <div class="main-bottom">
      <div class="container">
        <?php print $content['footer']; ?>
      </div>
    </div> <!-- .main-bottom -->
  <?php endif; ?>

  <?php if ($content['footer']): ?>
    <footer class="main-footer">
      <div class="container">
        <?php print $content['footer']; ?>
      </div>
    </footer>  <!-- .main-footer -->
  <?php endif; ?>


</div>
