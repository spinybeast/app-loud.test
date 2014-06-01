<? use Filter_Platforms as Platforms; ?>
<? use Filter_Category as Category; ?>
<div class="right_block">
    <div class="banner">
        <img src="/media/images/banners/google_250x250.jpg" alt=""/>
    </div>
    <? if (isset($category_cloud)): ?>
        <div class="category_cloud">
            <h1>Categories</h1>
            <div class="grey_line"></div>
            <div class="categories_list">
                <span <?= $category == Category::ALL ? 'class="active"' : '' ?>>
                    <a href="<?= URL::site(URL::title(Platforms::getName($activePlatform))) ?>">All</a>
                </span>
                <? foreach ($category_cloud as $id => $categoryForPlatform): ?>
                    <span id="category<?= $id ?>" <?= $id == $category ? 'class="active"' : '' ?>>
                        <a href="<?= URL::site(URL::title(Platforms::getName($activePlatform)) . "/" . URL::title($categoryForPlatform->name))?>">
                            <?= $categoryForPlatform->name ?>
                        </a>
                    </span>
                <? endforeach; ?>
            </div>
            <div class="grey_line"></div>
        </div>
    <? endif; ?>
    <div class="banner">
        <img src="/media/images/banners/google_250x250.jpg" alt=""/>
    </div>
    <div class="banner">
        <img src="/media/images/banners/google_250x250.jpg" alt=""/>
    </div>
</div>