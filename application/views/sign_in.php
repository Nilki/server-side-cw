<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style type="text/css">
        body {
            background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);
            margin-top: 20px;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: "Open Sans", sans-serif;
            color: #333333;
        }

        .box-form {
            margin: 0 auto;
            width: 80%;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex: 1 1 100%;
            align-items: stretch;
            justify-content: space-between;
            box-shadow: 0 0 20px 6px #090b6f85;
        }

        @media (max-width: 980px) {
            .box-form {
                flex-flow: wrap;
                text-align: center;
                align-content: center;
                align-items: center;
            }
        }

        .box-form div {
            height: auto;
        }

        .box-form .left {
            color: #FFFFFF;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("https://img.freepik.com/free-vector/people-reading-books-falling-flying-air_107791-13928.jpg?w=1380&t=st=1671694095~exp=1671694695~hmac=6ef007f1c651ba3178f06266eef8231486a54367b7645b074b39689187c355c4");
            width: 990px;
            overflow: hidden;
        }

        .box-form .left .overlay {
            padding: 30px;
            width: 100%;
            height: 100%;
            overflow: hidden;
            box-sizing: border-box;
        }

        .box-form .right {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 40px;
            overflow: hidden;
        }

        @media (max-width: 980px) {
            .box-form .right {
                width: 100%;
            }
        }

        .box-form .right p {
            font-size: 16px;
            color: black;
        }

        .box-form .right .inputs {
            overflow: hidden;
        }

        .box-form .right input {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 16px;
            border: none;
            outline: none;
            border-bottom: 2px solid #B0B3B9;
        }

        .box-form .right button {
            float: right;
            color: #fff;
            font-size: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 12px 35px;
            border-radius: 50px;
            display: inline-block;
            margin-top: 50px;
            border: 0;
            outline: 0;
            cursor: pointer;
            box-shadow: 0px 4px 20px 0px #49c628a6;
            background-image: linear-gradient(135deg, #70F570 10%, #49C628 100%);
        }
    </style>
</head>

<body>
    <div class="box-form" id="login-view">
        <div class="left">
            <div class="overlay">
            </div>
        </div>
        <div class="right">
            <img src="https://i.ibb.co/C0VWfLQ/Bookgramlogo.png" alt="Bookgramlogo" style="width:400px;height:300px;">
            <p>Don't have an account? <Strong><a href="<?php echo base_url('/signup'); ?>" style="color: #080807; ">Creat Your Account</a></Strong> it takes less than a minute</p>
            <div class="inputs">
                <input type="text" id='username' placeholder="User name">
                <br>
                <input type="password" id='password' placeholder="Password">
            </div>
            <button id='login-btn'>Login</button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.1/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js"></script>

    <script>
        var apiUrl = "<?php echo base_url('api/users/login'); ?>"
        var baseUrl = "<?php echo base_url('/'); ?>"

        var User = Backbone.Model.extend({
            url: apiUrl,
            defaults: {
                user_name: null,
                password: null
            },
            isValid: function() {
                if (this.get('user_name') == '') {
                    alert('Username is required!!!')
                    return false;
                } else if (this.get('password') == '') {
                    alert('Password is required!!!')
                    return false;
                } else {
                    return true;
                }
            },
        });

        var LogInView = Backbone.View.extend({
            model: User,
            events: {
                'click #login-btn': 'login'
            },
            login: function(e) {
                e.preventDefault();

                var user = new User({
                    user_name: $('#username').val(),
                    password: $('#password').val()
                });

                if (user.isValid()) {
                    user.save({}, {
                        async: false,
                        contentType: 'application/json',
                        dataType: 'text',
                        success: function(model, response) {
                            console.log("success");
                            alert('User Logged in successfully !')
                            window.location.href = baseUrl + 'home';
                        },
                        error: function(model, response) {
                            console.log("error");
                            alert('Please input correct authentication details');
                            window.location.href = baseUrl + 'sign_in';
                        }
                    });
                }
            },
        });

        var LogInView = new LogInView({
            el: $('#login-view')
        });
    </script>
</body>

</html>