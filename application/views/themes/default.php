<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html> 
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

        <style type="text/css">

            body {
                background-color: #fff;
                font-family: "Roboto";
                color: #4F5155;
            }

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
            }

            h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
            }

            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #body {
                margin: 0 15px 0 15px;
            }

            p.footer {
                text-align: right;
                font-size: 11px;
                border-top: 1px solid #D0D0D0;
                line-height: 32px;
                padding: 0 10px 0 10px;
                margin: 20px 0 0 0;
            }

            
            
            @media only screen and (min-width: 993px)
            {
            nav .brand-logo {
                margin-left: 50px;
            }
            .container {
                width: 90%;
            }
            }
            
            @media only screen and (min-width: 601px)
            {
            .container {
                width: 90%;
            }
            }
            
            #container {
                margin: 50px;
                border: 1px solid #D0D0D0;
                box-shadow: 0 0 8px #D0D0D0;
            }
            
            main {
                height: 77vh;
            }
            
            .todo-container {
                padding: 15px 20px 5px 20px;
            }
            
            .complete {
                text-decoration: line-through;
            }
            .pending {
                text-decoration: none;
            }
            
            div.footer-copyright {
                overflow: hidden;
                min-height: 50px;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                padding: 10px 0px;
                color: rgba(255,255,255,0.8);
                background-color: rgba(51,51,51,0.08);
            }
            div.text-white{
                padding: 5px 15px;
            }
            
            div.text-white a {
                color: white;
            }
            
            .todo-item {
                padding-bottom: 10px;
            }
            
        </style>
    </head>
    <body>
        <?= $output; ?>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    </body>
</html>