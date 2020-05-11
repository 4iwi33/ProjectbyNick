<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>TravelStates.com</title>
</head>

<body>
    <?php require "header.php" ?>
    <div class="container mt-5">
        <h2>Registration</h2>
        <form action="check.php" method="POST">
            <input type="email" name="email" placeholder="Send Email" class="form-control"><br>
            <textarea name="message" class="form-control" placeholder="Enter you message"></textarea><br>
            <button type="submit" name="send" class="btn btn-success">Send</button>
        </form>
    </div>
    <?php require "footer.php" ?>

</body>

</html>