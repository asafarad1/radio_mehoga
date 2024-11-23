<?php
    $filterby = get('search');
    
    $shows = $page
    ->children()
    ->listed()
    ->sortBy('published', 'desc')
    ->when($filterby , function($filterby) {
        return $this->filterBy('show_title', '*=', $filterby);
    })
    ?>

<ul class="shows">
    <?php foreach ($shows as $show): ?>
        <li class="show" 
        style="background-image: url('<?= $show->image()->url() ?>')"
        data-variable="<?= $show->mixcloudlink() ?>"
        onClick="buttonClicked(this);">
        <div class="show_tags">
            <p class="highlight"><?= $show->category() ?></p><br>
            <p class="highlight"><?= $show->published('d.m.y') ?></p>
        </div>
        <div class="show_title">
            <p class="highlight"><?= $show->show_title() ?></p>
        </div>
        <div class="show_info">
            <div class="show_description">
                <p class="highlight"><?= $show->description() ?></p>
            </div>
        </div>
    </li>
    <?php endforeach ?>
</ul>