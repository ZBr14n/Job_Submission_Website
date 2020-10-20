<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brian Lam, LLC. - Application Submission</title>
    <link rel="icon" type="image/png" href="./images/logo.PNG" />
    <style>
        .form__submit-msg {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .form__submit-msg>div {
            display: flex;
            min-height: 100%;
            align-items: center;

            flex-basis: 600px;
            height: 300px;

            background-image: url('./images/intro.jpg');
            background-position: center;
            background-size: contain;
            color: white;


            padding: 50px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php

    $conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "bb92ec9f820191", "1b0c19a9", "heroku_103eb66bbeb0789", 3306, null);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error() . PHP_EOL);
    } else {
        // echo "Connected successfully" . PHP_EOL;
    }


    // basic info
    $resume = mysqli_real_escape_string($conn, $_FILES["resume"]["name"]);
    $resume = htmlspecialchars($resume);

    $full_name = mysqli_real_escape_string($conn, $_POST["fullName"]);
    $full_name = htmlspecialchars($full_name);

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $company = mysqli_real_escape_string($conn, $_POST["company"]);



    // links
    $socialUrl = mysqli_real_escape_string($conn, $_POST["socialUrl"]);
    $otherWeb = mysqli_real_escape_string($conn, $_POST["websites"]);

    // additional info
    $textarea = mysqli_real_escape_string($conn, $_POST["textarea"]);



    $file_extensions = pathinfo($resume, PATHINFO_EXTENSION);
    if (!in_array($file_extensions, ['docx', 'doc', 'docm', 'pdf'])) {
        echo 'File extension for the resume must be a pdf or Word Doc.';
    } elseif ($_FILES["resume"]["size"] > 1000000) {
        echo 'File is too large.';
    } else {
        $query_insert = "INSERT INTO job_submission VALUES('', '$resume','$full_name','$email','$phone','$company','$socialUrl','$otherWeb','$textarea')";

        $res = mysqli_real_query($conn, $query_insert);
        if ($res === false) {
            echo 'FAILED';
        } else {
            echo '<section class="form__submit-msg"> <div>
            Thank you for submitting your application to us. We will review your application as soon as possible and will get in touch if there is a match.
        </div> </section>';
        }
    }
    ?>
</body>

</html>