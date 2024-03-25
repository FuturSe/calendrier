<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <style>
            .calendar{
                position: relative;
            }
            .calendar_table {
                width: 100%;
                height: calc(100vh - 128px);
            }

            .calendar_table td {
                padding: 10px;
                border: 1px solid #ccc;
                vertical-align: top;
                width: 14,29%;
                height: 20%;
            }

            .calendar_table td.is-today {
                background-color: #e2e2e2;
            }

            .calendar_table--6weeks td{
                height: 16.66%;
                width: 14.29%;
            }
            .calendar_weekday{
                font-weight: bold;
                color: #000;
                font-size: 1.2em;

            }
            .calendar_day{
                font-size: 1.3em;
            }
            .calendar_othermonth .calendar_day{
                opacity: 0.3;
            }
            .calendar__button{
                display: block;
                width: 55px;
                height: 55px;
                line-height: 55px;
                text-align: center;
                color: #ccc;
                font-size: 30px;
                background-color: #007bff;
                border-radius: 50%;
                position : absolute;
                bottom: 30px;
                right: 30px;
                text-decoration: none;
                transition: transform 0.3s;
                box-shadow: 0 6px 10px 0 #0000001a,0 1px 18px 0 #0000001a,0 3px  5px -1px #003;

            }

            .calendar__button:hover{
                text-decoration: none;
                color: #ccc;
                transform: scale(1.2);
            }


        </style>
        <title><?= isset($title) ? h($title):'Mon calendrier';?></title>
    </head>

    <body>
        <nav class="navbar navbar-dark bg-primary mb-3">
            <a href="/index.php" class="navbar-brand">mon calendrier</a>
        </nav>