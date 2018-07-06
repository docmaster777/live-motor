<div class="container__block">
    <div class="all__avto__wrap">
        <div class="avto__item__wrap">
            <?php foreach ($posts as $post): ?>
                <div class="avto__item">
                    <div class="avto__item__title">
                        <p><?=$post->title; ?></p>
                    </div>
                    <div class="avto__item__text">
                        <?=$post->text; ?>
                    </div>
                    <div class="avto__item__video">
                        <?=$post->video; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>