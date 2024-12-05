<?php
session_start();

// ფოტოს ატვირთვის დამუშავება
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['photo'])) {  // /home/dudu/Documents/Manu/PHP-PDO-main/restaurant/Read
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir); // თუ დირექტორია არ არსებობს, შევქმნათ ის
    }

    $targetFile = $uploadDir . basename($_FILES['photo']['name']);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // ვამოწმებთ, რომ ფაილი არის სურათი
    $check = getimagesize($_FILES['photo']['tmp_name']);
    if($check !== false) {
        // ვამოწმებთ ფაილის ტიპს
        if (in_array($fileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            // ვამოწმებთ ფაილის ატვირთვას
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
                $_SESSION['photo'] = $targetFile; // ფოტოს ბმული შენახული სესიაში
                $message = "Photo uploaded successfully!";
            } else {
                $message = "Error uploading the file.";
            }
        } else {
            $message = "Only JPG, JPEG, PNG & GIF files are allowed.";
        }
    } else {
        $message = "File is not an image.";
    }
}

// ფოტოს წაშლა სესიიდან
if (isset($_POST['clear_photo'])) {
    if (isset($_SESSION['photo']) && file_exists($_SESSION['photo'])) {
        unlink($_SESSION['photo']); // სურათის წაშლა ფაილის სისტემიდან
    }
    unset($_SESSION['photo']);
    $message = "Photo cleared.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Upload</title>
</head>
<body>

    <h1>Photo Upload Page</h1>

    <!-- შეტყობინების ჩვენება -->
    <?php if (isset($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <!-- ფოტოს ჩვენება -->
    <?php if (isset($_SESSION['photo'])): ?>
        <img src="<?php echo $_SESSION['photo']; ?>" alt="Uploaded Photo" style="width: 200px; height: auto;">
    <?php else: ?>
        <p>No photo uploaded.</p>
    <?php endif; ?>

    <!-- ფოტოს ატვირთვის ფორმა -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="photo">Choose photo:</label>
        <input type="file" name="photo" id="photo" required>
        <button type="submit">Upload</button>
    </form>

    <!-- ფოტოს წაშლის ღილაკი -->
    <?php if (isset($_SESSION['photo'])): ?>
        <form action="" method="post">
            <button type="submit" name="clear_photo">Clear Photo</button>
        </form>
    <?php endif; ?>

</body>
</html>
