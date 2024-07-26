<!DOCTYPE html>
<html>
<head>
    <title>::Login Page::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="asset/css/login.css">
    <link rel="stylesheet" type="text/css" href="asset/plugin/font-icon/css/fontawesome-all.min.css">
</head>
<body id="login">
    <img src="asset/image/logo5.png" id="logo-login" style="display: block; margin: 0 auto 10px auto;">
    <div class="alert alert-red text-center" style="display:none;" id="alert"><i class="fa fa-info-circle fa-lg"></i><p id="value">sdasdasd</p></div>
    <div id="panel-login">
        <form id="formlogin" method="POST">
            <div class="group-input">
                <label for="username">Username :</label>
                <input type="text" class="form-custom" required autocomplete="off" placeholder="Username" id="username" name="username">
            </div>
            <div class="group-input">
                <label for="password">Password :</label>
                <input type="password" class="form-custom" required autocomplete="off" placeholder="Password" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-green btn-full"><i class="fa fa-arrow-alt-circle-right text-white"></i> Login</button>
        </form>
    </div>
    <p></p>
    <img src="asset/image/top-image.svg" id="hiasan"><br>
    <script src="asset/js/jquery.js" type="text/javascript"></script>
    <script src="asset/js/main.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
        $('#formlogin').on('submit', function(e) {
            e.preventDefault();
            var username = $('#username').val();
            var password = $('#password').val();
            console.log('Username:', username);
            console.log('Password:', password);

            $.ajax({
                url: 'ceklogin.php',
                type: 'POST',
                data: {
                    username: username,
                    password: password
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response.result);
                    if (response.result === 'success') {
                        window.location.href = 'index.php';
                    } else {
                        $('#alert').show();
                        $('#value').text(response.result);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });

    </script>
</body>
</html>
