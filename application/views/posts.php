<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Post</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: whitesmoke;
            color: #333333;
        }

        .post {
            border-radius: 30px;
            margin-top: 80px;
            margin-bottom: 80px;
            background-color: #fff;
            height: 200px;
        }

        .post-container {
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            border-radius: 30px;
            background-color: white;
        }

        .write-post {
            padding: 20px;
            text-align: left;
        }

        .post-button {
            color: white;
            font-size: 14px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 12px 35px;
            border-radius: 50px;
            border: 0;
            outline: 0;
            background-image: linear-gradient(135deg, #453a2e 10%, #825b45 100%);
            margin-left: 50px;
            cursor: pointer;
        }

        input {
            overflow: hidden;
            padding: 5px;
            font-size: 16px;
            padding: 20px;
            margin-right: 10px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            border: 2px solid black;
            margin-bottom: 10px;
            width: 550px;
            height: 50px;
        }

        #description {
            width: 100%;
            height: 100px;
            border: 2px solid black;
            overflow: scroll;
        }
    </style>
</head>

<body>
    <form id="editForm" method="post">
        <h4> What's on your mind ?</h4>
        <input id="book_name" type="text" placeholder="Book Name">
        <input id="author" type="text" placeholder="Author">
        <input id="description" placeholder="Description">
        <div>
            <?php
            if (isset($error)) {
                echo $error;
            }
            ?>
        </div>
        <button type="submit" class="post-button"><i class="fa fa-pencil"></i>  Post</button>
    </form>
    <script>
        var baseUrl = "<?php echo base_url('/'); ?>"

        $('#editForm').on('submit', function() {
            var book_name = $('#book_name').val();
            var book_author = $('#author').val();
            var book_description = $('#description').val();
            var image = $('#profile_image').val();
            window.location.reload(true);
            $.ajax({
                type: "POST",
                url: baseUrl + "api/UserPost/new_post",
                dataType: "JSON",
                data: {
                    book_name: book_name,
                    book_author: book_author,
                    book_description: book_description,
                },
                success: function(data) {
                    $("#book_name").val(data.book_name);
                    $("#book_author").val(data.book_author);
                    $("#book_description").val(data.book_description);
                    alert('Post Created successfully');
                }
            });
            return false;
        });
    </script>

</body>


</html>