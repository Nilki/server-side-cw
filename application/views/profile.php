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

        .navigation-bar a {
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .navigation-bar a:hover {
            background-color: brown;
            color: black;
            border-radius: 50px;
        }

        .navigation-bar {
            width: 100%;
            height: 100px;
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 50px;
            margin-bottom: 10px;
        }

        .logo {
            display: inline-block;
            vertical-align: top;
            width: 200px;
            height: 180px;
            margin-right: 400px;
            margin-top: 15px;
        }

        .navigation-bar a {
            vertical-align: top;
            margin-right: 20px;
            height: 80px;
            line-height: 80px;
        }

        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            padding: 10px;

        }

        .left {
            width: 75%;
            padding: 20px;
        }

        .right {
            width: 25%;
            padding-left: 100px;
            padding-top: 20px;
            border-radius: 60px;
            height: 400px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }

        .a-box {
            display: inline-block;
            width: 200px;
            text-align: center;
            padding-top: 40px;
        }

        .img-container {
            height: 230px;
            width: 200px;
            overflow: hidden;
            border-radius: 20px 20px 20px 20px;
            display: inline-block;

        }

        .img-container img {
            height: 200px;
        }

        .inner-skew {
            display: inline-block;
            border-radius: 20px;
            overflow: hidden;
            padding: 0px;
            font-size: 0px;
            margin: 30px 0px 0px 0px;
            background-color: transparent;
            height: 250px;
            width: 200px;
        }

        .text-container {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            padding: 120px 20px 20px 20px;
            border-radius: 20px;
            background: #fff;
            margin: -120px 0px 0px 0px;
            line-height: 19px;
            font-size: 14px;
        }

        .text-container h3 {
            margin: 20px 0px 10px 0px;
            color: #04bcff;
            font-size: 18px;
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
            height: 45px;
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

        .user-posts {
            padding: 20px;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
            color: #000 !important;
            background-color: #fff !important;
            border-radius: 30px;
            margin-top: 20px;
            width: 70%;
            font-size: 14px;
            margin-left: 200px;
        }

        .avatar {
            float: left !important;
            border-radius: 50%;
            margin-right: 16px !important;
        }

        .hr {
            border: 0;
            border-top: 1px solid #eee;
            margin: 20px 0;
        }

        .post-body {

            margin: auto;
            padding-left: 250px;
        }

        .post-image {
            margin: auto;
            border-radius: 40px;
            padding: 30px;

        }

        .three-dots:after {
            float: right;
            cursor: pointer;
            color: black;
            content: '\2807';
            font-size: 30px;
            padding: 0 5px;
        }

        a {
            text-decoration: none;
            color: black;
            margin-top: 3px;
        }

        a div {
            padding: 10px;
        }

        .dropdown {
            text-align: center;
            position: relative;
            float: right;
            height: 40px;
            width: 150px;
            right: 10px;
            background-color: white;
            border: #000;
            border-radius: 10px;
            box-shadow: 0px 0px 3px 3px #000;
            outline: none;
            opacity: 0;
            z-index: -1;
            max-height: 0;
        }

        .dropdown-container:focus {
            outline: none;
        }

        .dropdown-container:focus .dropdown {
            opacity: 1;
            z-index: 100;
            max-height: 100vh;
        }

        .profile-button {
            color: black;
            font-size: 14px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 12px;
            border-radius: 50px;
            border: 0;
            outline: 0;
            width: 160px;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navigation-bar">

        <img class="logo" src="https://i.ibb.co/C0VWfLQ/Bookgramlogo.png">

        <a href="<?php echo base_url('/search'); ?>"><i class="fa fa-search"></i></button>
            <a href="<?php echo base_url('/home'); ?>"><strong> Home </strong></a>
            <a href="<?php echo base_url('/profile_page'); ?>"><strong> Profile </strong></a>
            <a href="<?php echo base_url('/support'); ?>"><strong> Support </strong></a>

    </nav>
    <!-- Body -->

    <div class="row">
        <div class="column left">
            <div id="user-all-posts"><br>
            </div>
        </div>
        <div class="column right">
            <!-- Profile -->
            <div class="a-box">
                <div class="img-container">
                    <div class="img-inner">
                        <div class="inner-skew">
                            <img src="https://i.ibb.co/HHtf570/bear.png">
                        </div>
                    </div>
                </div>
                <div class="text-container">
                    <h3 id='user-name'>Nilki U</h3>
                    <div>
                        <p>
                            <button type="button" class="profile-button">
                                <i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i>
                                <a href="<?php echo base_url('/edit_profile'); ?>"><strong> Edit Profile
                                </a>
                            </button>
                        </p>

                        <p>
                            <button type="button" id="logout" class="profile-button">
                                <a href="<?php echo base_url('/sign_in'); ?>">
                                    <i class="fa fa-sign-out"></i><strong> Log Out
                                </a>
                            </button>
                        </p>

                        <p>
                            <button id="deactivate" type="button" class="profile-button">
                                <a href="<?php echo base_url('/api/users/deactivate'); ?>">
                                    <i class="fa fa-window-close"></i> <strong> Deactivate
                                </a>
                            </button>
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <script>
            // get logged in user details
            var username;
            $(document).ready(function() {
                $.get("<?php echo base_url('/api/users/loggedinuser'); ?>", function(data) {
                    console.log(data)
                    $("#user-name").text(data.user_name);
                    $("#user").text(data.user_name);
                    username = data.user_name;
                });
            });

            //deactivate user
            $(document).ready(function() {
                $("#deactivate").click(function() {
                    $.get("<?php echo base_url('/api/users/deactivate'); ?>", function(data, status) {
                        alert("Data: " + data + "\nStatus: " + status);
                    });
                });
            });

            // delete post
            $(document).ready(function() {
                $("#delete").click(function() {
                    $.get("<?php echo base_url('/api/userPost/delete_post'); ?>", function(data, status) {
                        alert("Data: " + data + "\nStatus: " + status);
                    });
                });
            });

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
                        $('#result').text(data);
                        alert('Search complete !!');
                    }
                });
                return false;
            });


            //create post
            $(document).ready(function() {
                $.get("<?php echo base_url('/api/userPost/created_post'); ?>", function(data) {
                    var postsHtml = '';
                    data.books.forEach(function(book) {
                        console.log(book);
                        postsHtml += getHtml(book);
                    });
                    $("#user-all-posts").html(postsHtml);
                });
            });

            function getHtml(book, data) {
                return `
                    <div class="user-posts"><br>
                        <div class="dropdown-container" tabindex="-1">
                            <div class="three-dots"></div>
                            <div class="dropdown">
                                <a href="#">
                                    <div id="delete"> <a href="<?php echo base_url('/api/userPost/delete_post'); ?>"> Delete Post</div>
                                </a>
                            </div>
                        </div>
                        <img src="https://i.ibb.co/HHtf570/bear.png" alt="Avatar" class="avatar" style="width:60px"><br>
                        <h4 id="user"> ${book.user_name} </h4><br>
                        <hr class="hr">
                        <p id="post-det"> ${book.book_name} <br> ${book.book_author}<br>${book.book_description} </p>
                        
                        <div class="post-body">
                            
                        </div>
                        <button type="button" class="post-button"><i class="fa fa-thumbs-up"></i>  Like</button>
                        <button type="button" class="post-button"><i class="fa fa-thumbs-down"></i>  Dislike</button>
                        <button type="button" class="post-button"><i class="fa fa-comment"></i>  Comment</button>
                    </div>
              
                `;
            }
        </script>
</body>

</html>