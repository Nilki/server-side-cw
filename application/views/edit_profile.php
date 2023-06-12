<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <title>Profile Edit</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style type="text/css">
        body {
            background-image: linear-gradient(135deg, #eef0b9 10%, #825b45 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin-top: 20px;
            font-family: "Open Sans", sans-serif;
            color: #333333;
        }

        .box-form {
            margin: 0 auto;
            width: 70%;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex: 1 1 100%;
            align-items: stretch;
            justify-content: space-between;
            box-shadow: 0 0 20px 6px #090b6f85;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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
            color: black;
            background-color: #33302d;
            margin: 50px;
            width: 250px;
            overflow: hidden;
            border-radius: 30px;
            /* padding:80px; */
            text-align: center;
        }

        .box-form .left .overlay {

            padding: 10px;
            width: 100%;
            height: 100%;
            overflow: hidden;
            box-sizing: border-box;
            align-self: center;
            margin-top: 100px;
        }

        .box-form .left .overlay p {
            margin-top: 250px;
            font-size: 16px;
            /* font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; */
            color: white;
            text-align: center;
        }

        .box-form .right {
            padding: 40px;
            margin-left: 35px;
            overflow: hidden;
            align-items: center;
            background-color: white;
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
            padding: 20px;
        }

        .box-form .right input,
        select {
            padding: 7px;
            margin-top: 20px;
            margin-right: 200px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 14px;
            border: none;
            outline: none;
            border-bottom: 2px solid #B0B3B9;
        }

        .box-form .right button {
            float: left;
            color: white;
            font-size: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 12px 35px;
            border-radius: 50px;
            display: inline-block;
            margin-top: 30px;
            border: 0;
            outline: 0;
            cursor: pointer;
            background-image: linear-gradient(135deg, #453a2e 10%, #825b45 100%);
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

        .user-det {
            padding: 10px;
            background-color: #B0B3B9;
            border-radius: 20px;
            margin-top: 10px;


        }
    </style>
</head>

<body>
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <div class="a-box">
                    <div class="img-container">
                        <div class="img-inner">
                            <div class="inner-skew">
                                <img src="https://i.ibb.co/HHtf570/bear.png">
                            </div>
                        </div>
                    </div>
                    <div class="text-container">
                        <h3 class='user-name' id="user-name">Nilki U</h3>
                        <div><strong> Edit Your Profile </strong> <br>
                            <ul class="user-det" id="user-det">
                                <li style="list-style-type:none" id="fname"> Nilki </li>
                                <li style="list-style-type:none" id="lname">Upathissa </li>
                                <li style="list-style-type:none" id="email">nilki@gmail.com </li>
                                <li style="list-style-type:none" id="dob">2020.02.04 </li>
                                <li style="list-style-type:none" id="gender">Female</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <form id="editForm" method="post">

                <p>Go back to the<strong><a href="<?php echo base_url('/profile_page'); ?>" style="color: #453a2e;"> My Profile </a></strong></p><br>
                <div id="inputs">

                    <p> First Name&nbsp; <input id="i-fname" type="text" placeholder="First name"></p>

                    <p> Last Name&nbsp;&nbsp; <input id="i-lname" type="text" placeholder="Last name"></p>

                    <p> Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input id="i-email" type="email" placeholder="Email Address"></p>

                    <p> Password&nbsp;&nbsp;&nbsp;&nbsp; <input id="i-password" type="password" placeholder="New Password"></p>

                    <p>Birthdate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input id="i-dob" type="date" id="birthday" name="birthday"></p>

                    <p>Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select id="i-gender" name="gender">
                            <option value="none" selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select></p>
                </div>
                <button id="update" type="submit"> Update </button>
            </form>
        </div>

    </div>
    <script>
        var baseUrl = "<?php echo base_url('/'); ?>"

        $(document).ready(function() {
            $.get(baseUrl + "api/users/loggedinuser", function(data) {
                console.log(data)
                $("#user-name").text(data.user_name);
                $("#fname").text(data.first_name);
                $("#lname").text(data.last_name);
                $("#email").text(data.email);
                $("#dob").text(data.birthdate);
                $("#gender").text(data.gender);
            });
        });

        $('#editForm').on('submit', function() {
            var first_name = $('#i-fname').val();
            var last_name = $('#i-lname').val();
            var email = $('#i-email').val();
            var password = $('#i-password').val();
            var birthdate = $('#i-dob').val();
            var gender = $('#i-gender').val();
            window.location.reload(true);
            $.ajax({
                type: "POST",
                url: baseUrl + "api/users/update",
                dataType: "JSON",
                data: {
                    first_name: first_name,
                    last_name: last_name,
                    email: email,
                    password: password,
                    birthdate: birthdate,
                    gender: gender
                },
                success: function(data) {
                    $("#i-fname").val(data.first_name);
                    $("#i-lname").val(data.last_name);
                    $("#i-email").val(data.email);
                    $("#i-password").val(data.password);
                    $("#i-dob").val(data.birthdate);
                    $("#i-gender").val(data.gender);
                    $('#editModal').modal('hide');
                }
            });
            return false;
        });
    </script>

</body>

</html>