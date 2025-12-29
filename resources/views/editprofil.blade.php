<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Radio Buttons</title>
    <style>
        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100vh;
            padding: 0 50px;
        }

        .radio {
            position: relative;
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .radio input[type="radio"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
            opacity: 0;
            z-index: 1;
        }

        .radio label {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #fff;
            border: 2px solid #000;
            cursor: pointer;
            z-index: 2;
        }

        .radio:hover label {
            animation: UnderlineAnimation 1s ease-in-out infinite;
        }

        @keyframes UnderlineAnimation {
            0% {
                transform: scaleX(1);
            }
            50% {
                transform: scaleX(1.4);
            }
            100% {
                transform: scaleX(1);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="radio">
            <input type="radio" id="radio2" name="radio" value="radio2">
            <label for="radio2"></label>
        </div>
        <div class="radio">
            <input type