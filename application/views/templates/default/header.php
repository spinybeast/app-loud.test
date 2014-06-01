<? use Filter_Platforms as Platforms; ?>
<div class="header">
    <div class="header_zigzag"></div>
    <img src="/media/images/backgrounds/up-Glow.png" alt="" class="header_glow"/>
    <div class="header_content">
        <a href="<?= URL::site(URL::title(Platforms::getName($activePlatform))) ?>">
            <img src="/media/images/main/logo.png" alt="Apploud">
        </a>
        <h1>Platforms</h1>
        <div class="platforms">
            <span>Choose your platform</span>
            <ul>
                <? foreach (Filter_Platforms::getAll() as $id => $name): ?>
                <li>
                    <a class="platform <?= $activePlatform == $id ? "active" : "" ?>" href="/<?= URL::title($name) ?>">
                        <?= $name ?>
                    </a>
                </li>
                <? endforeach; ?>
            </ul>
        </div>
        <ul class="menu">
            <li class="first <?= isset($filter) && $filter == Model_Review::NEW_APPS ? 'active' : '' ?>">
                <a href="<?= URL::site(URL::title(Platforms::getName($activePlatform)) . "/" . URL::title(Model_Review::NEW_APPS))?>" alt="new">New Apps</a>
            </li>
            <li <?= isset($filter) && $filter == Model_Review::TOP ? 'class="active"' : '' ?>>
                <a href="<?= URL::site(URL::title(Platforms::getName($activePlatform)) . "/" . URL::title(Model_Review::TOP))?>">Top</a>
            </li>
            <li <?= isset($filter) && $filter == Model_Review::FREE ? 'class="active"' : '' ?>>
                <a href="<?= URL::site(URL::title(Platforms::getName($activePlatform)) . "/" . URL::title(Model_Review::FREE))?>" alt="free">Free</a>
            </li>
            <li <?= isset($filter) && $filter == Model_Review::OUR_FAVORITE ? 'class="active"' : '' ?>>
                <a href="<?= URL::site(URL::title(Platforms::getName($activePlatform)) . "/" . URL::title(Model_Review::OUR_FAVORITE))?>" alt="favorite">Our favorite</a>
            </li>
            <li <?= Request::current()->action() == 'about' ? 'class="active"' : ''?>>
                <a href="<?= URL::site(Route::get('static')->uri(array('action' => 'about')))?>" alt="about">About</a>
            </li>
            <li class="last<?= Request::current()->action() == 'contact' ? ' active' : ''?>">
                <a href="<?= URL::site(Route::get('static')->uri(array('action' => 'contact')))?>" alt="contact">Contact us</a>
            </li>
        </ul>
        <div class="social_networks top">
            <a class="facebook" target="_blank" href="<?= Kohana::$config->load('site.follow_us_links.facebook'); ?>"></a>
            <a class="vkontakte" target="_blank" href="<?= Kohana::$config->load('site.follow_us_links.vkontakte'); ?>"></a>
            <a class="twitter" target="_blank" href="<?= Kohana::$config->load('site.follow_us_links.twitter'); ?>"></a>
            <a class="google" target="_blank" href="<?= Kohana::$config->load('site.follow_us_links.google+'); ?>"></a>
            <a class="rss" target="_blank" href="<?= URL::site(Route::get('rss')->uri()); ?>"></a>
        </div>
    </div>
    <!--                        <form action="/search.php" class="search">-->
    <!--                            <table width="247" border="0" cellspacing="0" cellpadding="0">-->
    <!--                                <tr>-->
    <!--                                    <td width="208" align="left">&nbsp;&nbsp;&nbsp;<input type="text" value="Search..."-->
    <!--                                                                                          style="border:0;"/></td>-->
    <!--                                    <td width="39" align="left">&nbsp;&nbsp;<input type="image"-->
    <!--                                                                                   src="/media/images/default/search_glass.png"/>-->
    <!--                                    </td>-->
    <!--                                </tr>-->
    <!--                            </table>-->
    <!--                        </form>-->
    <div class="shadow_line"></div>
</div>
<div class="google_adwords">
    google adv
    <div class="grey"></div>
    <div class="second_stair"></div>
</div>
