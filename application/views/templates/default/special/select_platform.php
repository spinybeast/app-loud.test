<div class="center1">
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