<?php snippet('header') ?>

    <ul class="shows">
        <?php foreach ($page->children() as $show): ?>
        <li class="show"
        style="background-image: url('<?= $show->image()->url() ?>')"
        data-mixcloud-play-button="<?= $show->mixcloudlink() ?>" play="true">
            <a class="show_title" href="<?= $show->url() ?>">
                <p class="highlight"><?= $show->show_title() ?></p>
            </a>
            <a class="show_date" href="<?= $show->url() ?>">
                <p class="highlight"><?= $show->published()->toDate('d/m/y') ?></p>
            </a>
            <div class="hover_ovelay"></div>
            <div class="hover_play"></div>
        </li>
        <?php endforeach ?>
    </ul>

<?php snippet('scripts') ?>
<?php snippet('footer') ?>