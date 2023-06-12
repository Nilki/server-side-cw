<!DOCTYPE html>
<html>

<head>
    <title>CodeIgniter Image Upload</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div>
        <?php
        if (isset($error)) {
            echo $error;
        }
        ?>
        <form method="post" action="<?= base_url('home') ?>" enctype="multipart/form-data">
            <input type="file" id="profile_image" name="profile_image" size="33" />
            <!-- <input type="submit" value="Upload Image" /> -->
        </form>
    </div>
</body>

</html>