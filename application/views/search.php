<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
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

        .post-button {
            color: white;
            font-size: 14px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 12px 35px;
            border-radius: 50px;
            border: 0;
            outline: 0;
            background-image: linear-gradient(135deg, #453a2e 10%, #825b45 100%);
        }

        .search {
            width: 100%;
            position: relative;
            display: flex;
            color: black;
            margin-top: 20px;

        }

        #searchForm {
            width: 100%;
            position: relative;
            display: flex;
            color: black;
            margin-top: 20px;

        }

        .searchTerm {
            width: 100%;
            border: 3px solid black;
            border-right: none;
            padding: 5px;
            height: 45px;
            border-radius: 5px 0 0 5px;
            outline: none;
            color: black;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: transparent;
        }

        .searchTerm input {
            color: black;
        }

        .searchTerm:focus {
            color: black;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .searchButton {
            width: 40px;
            height: 60px;
            border: 1px solid black;
            background-color: black;
            text-align: center;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
        }

        .wrap {
            width: 30%;
            margin-left: 500px;
            top: 50%;
            left: 50%;
        }
    </style>
</head>

<body>

    <!-- Search bar -->
    <div class="wrap">
        <div class="search">
            <form id="searchForm" method="post">
                <input type="text" class="searchTerm" id="searchTerm" placeholder="What are you looking for?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <div id="result">
        </div>

        <script>
            var baseUrl = "<?php echo base_url('/'); ?>"
            //search post
            $('#searchForm').on('submit', function() {
                var search_query = $('#searchTerm').val();
                $.ajax({
                    type: "POST",
                    url: baseUrl + "api/userPost/search",
                    dataType: "JSON",
                    data: {
                        search_query: search_query,
                    },
                    success: function(data) {
                        console.log(data);
                        //$('#result').text(data);
                        //alert('Search complete !!');
                    }

                });

                return false;
            });
        </script>
</body>

</html>