
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Bio Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf3ff;
            color: #003366;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        .container {
            background: white;
            max-width: 600px;
            margin: 40px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 51, 102, 0.2);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
        }
        img {
            display: block;
            margin: 15px auto;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #003366;
        }
        .btn {
            display: block;
            width: 100%;
            background-color: #003366;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #0055cc;
        }
        a {
            color: #0055cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Submitted Information</h1>
    </header>

    <div class="container">
        <?php
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
            $bio = $_POST['bio'];
            $facebook = $_POST['facebook'];
            $contact = $_POST['contact'];

            if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
                $target_dir = "uploads/";
                if (!is_dir($target_dir)) {
                    mkdir($target_dir);
                }
                $target_file = $target_dir . time() . "_" . basename($_FILES["picture"]["name"]);
                move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
            } else {
                $target_file = "";
            }

            echo "<h2>Welcome, $fname $mname $lname!</h2>";

            if ($target_file != "") {
                echo "<img src='$target_file' alt='Profile Picture'>";
            }

            echo "<p><strong>Your name is:</strong> $fname $mname $lname</p>";
            echo "<p><strong>Your age is:</strong> $age</p>";
            echo "<p><strong>Your sex is:</strong> $sex</p>";

            if (empty($hobbies)) {
                echo "<p style='color:red;'>You have not chosen your hobby.</p>";
            } else {
                echo "<p><strong>Your hobbies are:</strong> " . implode(", ", $hobbies) . "</p>";
            }

            if (empty(trim($bio))) {
                echo "<p style='color:red;'>You have not set your bio.</p>";
            } else {
                echo "<p><strong>Your bio:</strong> $bio</p>";
            }

            if (!empty($facebook)) {
                echo "<p><strong>Facebook:</strong> <a href='$facebook' target='_blank'>$facebook</a></p>";
            }

            if (!empty($contact)) {
                echo "<p><strong>Contact Number:</strong> $contact</p>";
            }
        ?>
        <a href="index.php" class="btn">Submit Another Response</a>
    </div>
</body>
</html>
