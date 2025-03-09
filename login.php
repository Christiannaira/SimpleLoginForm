<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>

    <main>

        <section class="home">

            <div class="home_content">

                <div class="home_image">

                    <img src="home_image.avif" alt="user image">

                </div>

                <div class="home_form">

                    <div class="home_form_content">

                        <h1>Sign Up</h1>


                        <form action="welcome.php" method="POST">

                            <div class="name_input">
                                <i class='bx bx-user'></i>
                                <input type="text" placeholder="Your username" name="user_name">
                            </div>

                            <div class="password_input">
                                <i class='bx bx-lock-alt' ></i>
                                <input type="text" placeholder="Password" name="password">
                            </div>

                            <button type="submit" id="form_button">Log in</button>
                                                        

                        </form>

                    </div>

                    <div class="home_social_contents">
                        
                        <h2>Or login with</h2>

                    </div>

                </div>

            </div>

        </section>

    </main>

    
    
</body>

</html>