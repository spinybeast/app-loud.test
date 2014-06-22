<div class="center1"><p class="special">
        There are 800,000+ apps in the App Store. <br>

        We don't think that the top 25 developers should continue to take 50% of all revenue generated. <br>

        We expect more, and we're building a platform to solve app discoverability for developers worldwide.
    </p>

    <div>
        <h1 class="choose">Сhoose your platform</h1>

        <div class="platforms special">
            <ul>
                <? foreach (Filter_Platforms::getAll() as $id => $name): ?>
                    <li>
                        <a class="platform" href="/<?= URL::title($name) ?>">
                            <?= $name ?>
                        </a>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>
</div>