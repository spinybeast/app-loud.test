<div class="center">
    <? /** @var $review Model_Review */?>
    <? if (count($reviews) > 0): ?>
        <ul class="reviews">
            <? foreach ($reviews as $review): ?>
                <li>
                    <div class="review_date">
                        <?= date('M d, Y', $review->date_post) ?>
                    </div>
                    <div class="review_content">
                        <a href="/review/<?= $review->id ?>/<?= URL::title($review->name) ?>" class="review_icon">
                                <img src="/images/icon/icon-<?= $review->id ?>.png" alt="<?= $review->name ?>"/>
                        </a>
                        <div class="right_labels">
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style addthis_16x16_style"
                                 addthis:url="<?= $review->id ?>">
                                <a class="addthis_button_compact"></a><a
                                    class="addthis_counter addthis_bubble_style"></a>
                            </div>
                            <!-- AddThis Button END -->
                            <div class="price">
                                <?= $review->price ? ('$' . $review->price) : 'free' ?>
                            </div>
                            <? if ($review->vip): ?>
                                <div class="hot">Hot offer</div>
                            <? endif; ?>
                        </div>
                        <div class="clear"></div>
                        <div class="name">
                            <?= $review->name ?>
                        </div>
                        <div class="description">
                            <?= $review->cutDescription() ?>
                        </div>
                    </div>
                    <a href="/review/<?= $review->id ?>/<?= URL::title($review->name) ?>" class="read_more">read
                        more</a>
                </li>
            <? endforeach; ?>
        </ul>
    <? else: ?>
        <div>All coming soon...</div>
    <? endif ?>

    <? if (isset($pagination)): ?>
        <?= $pagination ?>
    <? endif; ?>
    <div class="clear"></div>
</div>