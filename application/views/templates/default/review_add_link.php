<div>
    <b>Hello!</b>
    <p>Your unique link: <?= URL::site(Route::url('user_add_review', array('hash' => $hash)), true); ?></p>
</div>