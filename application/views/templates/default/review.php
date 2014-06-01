<div class="center">
    <div class="review_info">
        <div class="review_icon">
            <? /** @var $review Model_Review */ ?>
            <img src="/images/icon/icon-<?= $review->id ?>.png" alt="<?= $review->name ?>"/>
        </div>
        <div class="badge">
            <?= $review->store_badge() ?>
        </div>
        <div class="description review_page">
            <p class="review_name"><?= $review->name ?></p>

            <div>
                <?= nl2br($review->description) ?>
            </div>
        </div>
    </div>
    <? if (count($review->images())): ?>
        <div class="jcarousel-wrapper">
            <div class="jcarousel-frame-wrapper">
                <div class="jcarousel-frame">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="jcarousel-prev">
                        <div class="transparent"></div>
                        <span></span></div>
                    <div class="jcarousel-next">
                        <div class="transparent"></div>
                        <span></span></div>
                </div>
            </div>
            <div class="jcarousel">
                <ul>
                    <? foreach ($review->images() as $image): ?>
                        <li>
                            <a href="/<?= $image ?>" class="fancybox" rel="gallery">
                                <?= HTML::image($image) ?>
                            </a>
                        </li>
                    <? endforeach; ?>
                </ul>
            </div>
        </div>
    <? endif; ?>
    <div align="center">
        <? if ($review->tube_link): ?>
            <iframe width="700" height="400" src="<?= $review->youTubeLink() ?>" frameborder="0"
                    allowfullscreen></iframe>
        <? elseif ($review->meow_link): ?>
            <iframe src="<?= $review->vimeoLink() ?>" width="700" height="400" frameborder="0" webkitAllowFullScreen
                    mozallowfullscreen allowFullScreen></iframe>
        <? endif; ?>
    </div>
    <div class="clear"></div>
</div>
