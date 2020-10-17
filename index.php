<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="./styles/style.css">

    <link rel="icon" type="image/png" href="./images/logo.PNG" />
    <title>Brian Lam, LLC.</title>
</head>

<body>

    <nav class="company__container">
        <a href="#" class="logo-link">
            <img src="./images/logo.PNG" alt="" width="120px" class="company__logo">
        </a>
    </nav>

    <main class="job__container">
        <header class="job__header">
            <section class="job__location">
                <h1>Software Engineer (Front End) (Boston/Remote)</h1>
                <h6>Boston, MA / Engineering / Full-time</h6>
            </section>

        </header>

        <section class="user__app-submit">
            <form class="user__form-wrapper" enctype="multipart/form-data" action="form_submit.php" method="post">

                <h6>Submit your application</h6>
                <article class="user__basic-info">
                    <div>
                        <div class="resume">Resume/CV</div>
                        <div><input type="file" name="resume" id="resume" required></div>
                    </div>
                    <div>
                        <div class="full-name">Full name</div>
                        <div><input type="text" name="fullName" id="" required></div>
                    </div>
                    <div>
                        <div class="email">Email</div>
                        <div><input type="text" name="email" id="" required></div>
                    </div>
                    <div>
                        <div class="phone">Phone</div>
                        <div><input type="text" name="phone" id="" required></div>
                    </div>
                    <div>
                        <div>Current Company</div>
                        <div><input type="text" name="company" id=""></div>
                    </div>
                </article>


                <h6>Links</h6>
                <article class="user__basic-info">
                    <div>
                        <div>LinkedIn URL</div>
                        <div><input type="text" name="socialUrl" id=""></div>
                    </div>
                    <div>
                        <div>Other websites</div>
                        <div><input type="text" name="websites" id=""></div>
                    </div>
                </article>


                <h6>Additional information</h6>
                <article class="user__basic-info">
                    <textarea name="textarea" placeholder="Add a cover letter or anything else you want to share" name="" id="" cols="90" rows="4" class="user__more-text"></textarea></article>


                <br />
                <div class="submit-btn-container">
                    <button type="submit" id="submit-app" class="btn btn-primary btn-lg">Submit Application</button>
                </div>
            </form>
        </section>


        <!-- <section>
            <iframe src="http://wentworth-student-login.surge.sh/" frameborder="0" height="500px" width="1500px"></iframe>
        </section> -->

        <footer>
            <section class="footer__info">
                <a href="http://">Brian Lam, LLC. Home Page</a>
                <br />
                <small>Jobs powered by <img src="./images/lever-logo.svg" width="90px" height="90px" /> </small>
            </section>
        </footer>
    </main>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>

</html>