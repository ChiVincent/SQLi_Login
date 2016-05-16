<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login XSS Level 1</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="semantic/dist/semantic.min.css">
    <style>
        .ch-min-width {
            width: 450px !important;
        }
        #content {
            margin-top: 40px;
        }
    </style>

</head>
<body>
<section id="content">
<div class="ui middle aligned center aligned grid">
    <div class="column ch-min-width">
        <h2 class="ui black header">
            Login to your account
        </h2>
        <form action="login.php" class="ui large form" method="POST" id="loginForm">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <?php if(isset($_GET['msg'])): ?>
                    <div class="ui red message">
                        <ul class="list">
                            <li><?php echo htmlentities($_GET['msg']); ?></li>
                        </ul>
                    </div>
                <?php endif; ?>
                <button class="ui fluid large black submit button">Login</button>
            </div>
        </form>
</div>
</section>
<script src="semantic/dist/semantic.min.js"></script>
</body>
</html>