<?php snippet('header') ?>

    <ul class="shows">
        <?php foreach ($page->children() as $show): ?>
        <li class="show"
        style="background-image: url('<?= $show->image()->url() ?>')"
        data-mixcloud-play-button="<?= $show->mixcloudlink() ?>" play="true">
            <div class="play_hover"></div>
            <div class="hover_ovelay"></div>
            <div class="show_title" href="<?= $show->url() ?>">
                <p class="highlight"><?= $show->show_title() ?></p>
            </div>
            <div class="show_date">
                <p class="highlight"><?= $show->date() ?></p>
            </div>
        </li>
        <?php endforeach ?>
    </ul>

<?php snippet('scripts') ?>
<?php snippet('footer') ?>