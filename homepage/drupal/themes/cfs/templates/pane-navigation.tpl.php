<?php
/**
 * @file
 * Returns the HTML for Panels Everywhere's navigation pane.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/2052513
 */
?>

    <!-- navigation -->
    <div id="area-navigation">
      <ul>
        <li><a href="index.html"><img src="common/img/gnavi_opendata_on.png" alt="トップ" /></a></li>
        <li><a href="#"><img src="common/img/gnavi_app_off.png" alt="アプリ開発" /></a></li>
        <li><a href="#"><img src="common/img/gnavi_about_off.png" alt="Code for Sakaiについて" /></a></li>
        <li><a href="#"><img src="common/img/gnavi_member_off.png" alt="メンバー" /></a></li>
        <li><a href="#"><img src="common/img/gnavi_contct_off.png" alt="お問い合わせ" /></a></li>
      </ul>
    </div>
  </div> 

<?php if (!empty($main_menu)): ?>
  <nav id="main-menu" role="navigation" tabindex="-1">
    <?php print $main_menu; ?>
  </nav>
<?php endif; ?>

<?php if (!empty($secondary_menu)): ?>
  <nav id="secondary-menu" role="navigation">
    <?php print $secondary_menu; ?>
  </nav>
<?php endif; ?>

<?php print $breadcrumb; ?>
