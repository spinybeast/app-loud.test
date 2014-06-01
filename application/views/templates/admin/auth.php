<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>App-Loud</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap/font-awesome.min.css">

    <style type="text/css">

        body
        {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin
        {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #bbb;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox
        {
            margin-bottom: 10px;
        }

        .form-signin input[type="text"],
        .form-signin input[type="password"]
        {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 4px 9px;
        }

    </style>
</head>
<body>
    <div class="container">
        <?php if (Session::instance()->get('error')): ?>
        <div class="alert alert-error" style="width: 300px; margin: 0  auto 10px;">
            <strong>
                <?= Session::instance()->get('error') ?>
            </strong>
        </div>
        <?php endif; ?>
        <form class="form-signin" method="post" role="form" action="<?= Route::url('admin_auth', array("action" => "login")) ?>">
            <h2 class="form-signin-heading">Please sign in</h2>
            <input type="text" class="input-xlarge" placeholder="Login" name="login" required="" autofocus=""><br/>
            <input type="password" class="input-xlarge" placeholder="Password" name="password" required=""><br/>

            <button type="submit" class="btn btn-large btn-block btn-primary">Sign in</button>
        </form>
    </div>
    <script src="/media/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>