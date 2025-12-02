<!DOCTYPE html>
<html>
<head>
    <title>Form Output</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Submitted Application Details</h1>
</header>

<section class="content">
    <h2>Your Information:</h2>
    <p><strong>Name:</strong> <?php echo $_POST["name"]; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST["email"]; ?></p>
    <p><strong>Mobile:</strong> <?php echo $_POST["mobile"]; ?></p>
    <p><strong>Course Selected:</strong> <?php echo $_POST["course"]; ?></p>
</section>

</body>
</html>
