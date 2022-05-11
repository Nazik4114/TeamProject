<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Букінг проект</title>
        <style>
            body{
                background-image: url(images/start.jpg);
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center;
                background-size: 1350px, auto;
                margin: 0px;
            }
            .mainPage{
                width: 40%;
                height: 250px;
                margin: auto;
                margin-top: 15%;
                text-align: center;
                font-family: 'Arial';
                font-size: 100%;
                padding-top: 5%;
                background-color: #CC9966;
                border-radius: 5%;
            }            

            .cell {
                padding: 1px;
                background-color: darkgreen;
            }
            .booked {
                background-color: darkred;
            }
            .disabled {
              color: red;
            }
            .free {
              color: green;
            }

            table{
                margin: auto;
                color: wheat;                
            }
            td{
                width: 50px;
                height: 30px;
                text-align: center;
            }
            .floorNumber{
                color: black;
            }

            hr{
                width: 80%;
            }

            .reserve{
                height: 30px;
                width: 150px;
                background-color: darkgreen;
                color: wheat;
            }
            .moveOut{
                height: 30px;
                width: 150px;
                background-color: darkred;
                color: wheat;
            }
        </style>
    </head>
    <body>
        <div class="mainPage">
            <?php require_once VIEWS_PATH.'table.php' ?>
            <hr>
            <?php require_once VIEWS_PATH.'form.php' ?>
        </div>        
    </body>
</html>