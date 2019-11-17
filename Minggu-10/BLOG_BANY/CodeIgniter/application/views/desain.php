<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Achmad Bany Majesty 14117164</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: url(Asset/galery/4k.jpg) no-repeat fixed;
            background-size: cover;
        }
        /* Style the header */

        .header {
            opacity: 0.5;
            filter: alpha(opacity=50);
            background: url(Asset/galery/headeer.jpg);
            padding: 0.5px;
            text-align: center;
        }
        /* Style the top navigation bar */

        .topnav {
            overflow: hidden;
            background-color: #333;
        }
        /* Style the topnav links */

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 15px 50px;
            text-decoration: none;
        }
        /* Change color on hover */

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .footer {
            opacity: 0.5;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: white;
            text-align: center;
            color: black;
        }

    </style>
    <style>
        div.gallery {
            margin: 60px 5px;
            float: left;
            width: 180px;
        }

        div.gallery img {
            width: 200%;
            height: auto;
        }

        div.desc {
            padding: 0px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="footer">&copy; Copyright Achmad Bany Majesty</div>
    <div class="header">
        <h1>Achmad Bany Majesty Website</h1>
    </div>

    <div class="topnav">
        <a href="<?= base_url(); ?>">Home</a>
        <a href="<?= base_url(); ?>Gallery">Gallery</a>
        <a href="<?= base_url(); ?>Contact">Contact Us</a>
        <a href="<?= base_url(); ?>About">About </a>
    </div>
</body>

<style>
    body {
        font: 'San Francisco', Helvetica, Arial, san-serif;
    }

    * {
        box-sizing: border-box;
    }

    .container {
        opacity: 0.5;
        filter: alpha(opacity=10);
        padding: 0.5px;
        border-radius: 5px;
        background-color: #000000;
        padding: 10px;
    }
</style>

<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


.container1 {
    opacity: 1;
    filter: alpha(opacity=10);
    padding: 0.5px;
    border-radius: 5px;
    background-color: #000000;
    padding: 10px;
}
.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

@media screen and (max-width: 600px) {
    .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>

</html>