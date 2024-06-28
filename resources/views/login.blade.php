<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Form-v6 by Colorlib</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="src/assets/css/nunito-font.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="src/assets/css/style.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body class="form-v6">
    <div class="page-content">
        <div class="form-v6-content">
            <div class="form-left">
                <img src="src/assets/images/SignupLadySmall.webp" alt="form">
            </div>
            <form class="form-detail" action="#" method="post">
                <h2>Welcome to LiveAuctioneers!</h2>
                <label class="label-input" for="email">EMAIL ADDRESS / USERNAME</label>
                <div class="form-row">
                    <input type="text" name="full-name" id="full-name" class="input-text" required>
                </div>
                <label class="label-input" for="password">PASSWORD</label>
                <div class="form-row">
                    <!-- <span>
                        <img class="password-icon" src="src/assets/images/visible.png" alt="">
                    </span> -->
                    <input type="text" name="your-email" id="your-email" class="input-text" required
                        pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                </div>
                <div class="form-row-last">
                    <input type="submit" name="login" class="login" value="Login">
                    <a class>Forgot Password?</a>
                </div>

                <div class="swtich-to-join">
                    <span style="font-weight:400;">Don't have an account?</span><a>Join</a>
                </div>

            </form>
        </div>
    </div>
</body>

</html>