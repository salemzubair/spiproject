<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Dashboard</title>
    <style>
        header {
            /* position: fixed; */
            text-align: center;
            width: 100%;

        }



        .container-fluid .row .col-sm-4 img {
            height: 60px;
            width: 140px;
            margin-left: 30%;
        }

        .topnav {
            overflow: hidden;
            background-color: #4850BB;
            height: 80px;
        }

        .test {
            z-index: 1 !important;
        }

        .container-fluid {
            background-color: #f1f1f1;
        }

        .topnav a {
            display: block;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            size: 17px;
            float: left;
            color: white;
            padding-top: 20px;

        }

        .topnav a:hover {
            background-color: #D07C27;
            border-radius: 12px;
        }

        h3 {
            color: orange;

        }

        button {
            margin-top: 30px;
            margin-left: 20%;
        }

        .btn {
            background-color: #D07C27;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        ul {
            list-style-type: none;
            font-weight: bold;

        }

        li {
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;


        }

        .leftpanel {
            /* background-color:blue; */
            padding-top: 5px;
        }

        a {
            /* color:white; */
            text-decoration: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>

    <!-- Header  starts-->
    <div class="header sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 my-5 ">
                    <img src="spi_logo.png" alt="">
                </div>
                <div class="col-sm-4 py-2">
                    <h2>Softpro Learning Center</h2>
                    <h3>A Unit of Softpro Group of Companies</h3>
                </div>
                <div class="col-sm-4">
                <button class="btn my-5 "  style="background-color: #D07C27;"onclick="location.href= 'http://localhost/project1/Admin/index.php'">Admin
                        Login</button>
                </div>
            </div>
        </div>
        <div class="topnav test">
            <a href="#">Home</a>
            <a href="about.php">About SPI</a>
            <a href="ST2023.php">ST2023</a>
            <a href="Technologies.php">Technologies</a>
            <a href="contact.php">Contact Us</a>
        </div>
    </div>
    <!-- Header  ends-->


    <!-- middlenav bar start -->
    <div class="container-fluid " style="height: 80px; background-color: #4850BB;">
        <div class="row">
            <h2 style="text-align: center; padding-top :20px;">Contact us </h2>
        </div>
    </div>
    <!-- middlenav bar ends -->


    <div class="container my-5">
        <form>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="SendMessage" size="30" style="background-color: #D07C27;">
        </form>
    </div>


<div class="container-fluid">
    <!-- footer starts -->
   <div class="footer">
        <div class="container-fluid">
            <div class="row ss pt-5" style=" margin-top:25px;">

                <div class="col-sm-4">
                    <img src="spi_logo.png" style="width:50%;">
                </div>

                <div class="col-sm-4" style="color:black; margin-top:15px;">
                    <display style="font-weight: bolder">
                        <b> Softpro Summer Training 2023 Pre-Reporting Portal</b>
                    </display>
                    <p>Launched by Softpro India, the largest learing center of North India imparted training to more
                        than <b><span class="text-danger">200000+ Engineers</span></b> till date</p>
                    <p><b><span class="text-danger">&copy 2022-<?php echo date("y"); ?></span></b> Designed and
                        Developed by : <span class="text-danger"> <b> Salem Zubair </b></span>at Softpro India.</p>
                </div>

                <!-- <div class="col-sm-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.367633220126!2d80.96034943488772!3d26.923557400000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd7e0637bf21%3A0x730fe46201abc68a!2sSoftpro%20Learning%20Center!5e0!3m2!1sen!2sin!4v1662702586659!5m2!1sen!2sin"
                        width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> -->

            </div>
        </div>
    </div>


    <!-- footer ends -->
</div>




</body>

</html>