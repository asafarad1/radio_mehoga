<?php snippet('header') ?>

<div class="show_page" style="background-image: url('<?= $page->image()->url() ?>')">
  <div class="show_info">
    <div class="show_date">
        <p class="highlight"><?= $page->published()->toDate('d/m/y') ?></p>
    </div>
    <div class="show_title"
    data-mixcloud-play-button="<?= $page->mixcloudlink() ?>" play="true">
        <p class="highlight"><?= $page->show_title() ?></p>
    </div>
    <div class="show_description">
        <p><?= $page->description() ?></p>
    </div>
  </div>
</div>

<?php snippet('scripts') ?>
<?php snippet('footer') ?>