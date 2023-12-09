<!DOCTYPE html>
<html>
<head>
    <!-- Document Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="John Yrrah Cabiles">

    <!-- Favicon and Styles -->
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="styles.css">
    <!-- Page Title -->
    <title>GDM RiskWatch - Log In</title>
</head>
<body class="fcon center Page animate fade" id="login">
    <video muted autoplay loop>
        <source src="medical.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <article class="fcon center animate">
        <section class="animate fade-left">
            <p>Start Your Journey to Healthier Pregnancy Today!</p>
            <p>Login for Personalized Help and Support.</p>
        </section>
    </article>
    <article class="fcon center">
        <section class="login fcon col center gap animate fade-right">
            <img id="logo" alt="logo" src="logo.png"/>
            <form action="process_login.php" method="post">
                <div class="inputGroup">
                    <input type="text" id="username" name="username" required=""/>
                    <label for="username" class="label">Username: </label>
                    <div class="underline"></div>
                </div>
                
                <div class="inputGroup">
                    <input type="text" id="password" name="password" required=""/>
                    <label for="password" class="label">Password: </label>
                    <div class="underline"></div>
                </div>
                <input type="submit" name="submit" id="submit" class="button" value="Login"/>
            </form>
        </section>
    </article>
</body>
</html>
