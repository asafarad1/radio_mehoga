<ul class="shows">
        <?php foreach ($page->children() as $show): ?>
            <li class="show" 
            style="background-image: url('<?= $show->image()->url() ?>')"
            data-variable="<?= $show->mixcloudlink() ?>"
            onClick="buttonClicked(this);">
                <div class="show_title">
                    <p class="highlight"><?= $show->show_title() ?></p>
                </div>
                <div class="show_info">
                    <div class="show_tags">
                        <p class="highlight"><?= $show->category() ?></p>
                    </div>
                    <div class="show_description">
                        <p class="highlight"><?= $show->description() ?></p>
                    </div>
                </div>
            </li>
        <?php endforeach ?>
    </ul>