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

        .post {
            border-radius: 30px;
            margin-top: 80px;
            /* margin-bottom: 80px; */
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
            width: 80%;
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
            padding: 0 8px;
        }

        .post-image {
            margin-bottom: 20px !important;
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
            <!-- Add New Post -->
            <div class="post">
                <div class="post-container">
                    <?php echo $posts; ?>
                </div>
            </div>
            <br><br><br><br><br>
            <!-- User's posts -->
            <div id="user-all-posts">
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
                    <h3 id='user-name'>Username</h3>
                    <div> Hi! Nice to see you. </div>
                </div>
            </div>
        </div>
        <!-- <img src="https://149349728.v2.pressablecdn.com/wp-content/uploads/2019/03/1*u_ULYT4pOBHhBx5bO4596Q.png" style="width:100%; height:300px" alt="Northern Lights" class="post-image"> -->
        <script>
            $(document).ready(function() {
                $.get("<?php echo base_url('/api/users/loggedinuser'); ?>", function(data) {
                    console.log(data)
                    $("#user-name").text(data.user_name);
                });
            });

            $(document).ready(function() {
                $.get("<?php echo base_url('/api/userPost/all_post_created'); ?>", function(data) {
                    console.log(data);
                    var postsHtml = '';
                    data.posts.forEach(function(post) {
                        console.log(post);
                        postsHtml += getHtml(post);
                    });
                    $("#user-all-posts").html(postsHtml);
                    console.log(postsHtml);
                });
            });


            function getHtml(post) {
                return `
                <div class="user-posts"><br>
                    <div class="dropdown-container" tabindex="-1">
                        <div class="three-dots"></div>
                        <div class="dropdown">
                            <a href="#">
                                <div>Delete Post</div>
                            </a>
                        </div>
                    </div>
                    <img src="https://i.ibb.co/HHtf570/bear.png" alt="Avatar" class="avatar" style="width:60px"><br>
                    <h4>${post.user_name}</h4>
                    <hr class="hr">
                    <p id="post-det"> ${post.book_name} <br> ${post.book_author}<br>${post.book_description} </p>
                    <div class="post-body" style="margin:0 -16px">
                        
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