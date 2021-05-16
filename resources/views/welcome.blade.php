<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homepage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                text-align: center;
                background-color: #2a3d45;
               
            }
            a {
                color:blue; 
            }
            a:hover {
                color: #fff;;
                text-decoration: none;
            }
            .hima {
                text-align:center;
                padding-left: 40px;
                padding-right: 40px;
                font-size: 20px;
              
            }
            footer {
                width: 100%;      
                bottom: 0;
                margin-top: 40px;
                padding-top: 100px;
                padding-bottom: 0px;
    }
             .right {
                position: absolute;
                 padding-left: 650px;
                 padding-top: 20px;
             }
             h1{

                 margin-top: 150px;
             }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-white-100 dark:bg-white-900 sm:items-center py-4 sm:pt-0">
            
       
            <div class="max-w-6xl content">
            <div class = "hima">
            <br>
            <div id="ourmanna-verse" style="color: #000; font-size:15px" >Initializing...</div>
            <h1 style="color:#ffffff; "> You Are Cordially Invited To Our Bible Study </h1>
            <h2 style="color:#012a4a;" > <strong>ANG DATING DAAN WORLDIDE BIBLE STUDY  </strong></H2>
            <p style="color:#012a4a;"><strong> <em> By: BRO.ELI SORIANO AND KUYA DANIEL RAZON  </em></strong></p>
            
            <div class="right">
            <p style="color:#000814;">You may send a  <br>
            <a href="/bible-study-request-form">Request Form</a><p><br>
            </div>
            </div>
            </div>
        </div>

    
    </body>

   <footer>
   <h5 style="color:#000000;"> <strong> Melrose B. Cortes </strong></h5>
        <a href="https://github.com/Hima-world"><img src="/images/github.png" class="icon-style" width = "15px" height = "15px"></a>
        <a href="https://www.facebook.com/Esorlem.U.23/"><img src="/images/facebook.png" class="icon-style" alt="Facebook icon" width = "15px" height = "15px"></a>
        <a href="https://www.instagram.com/esor_mel23/?hl=en"><img src="/images/instagram.svg.png" class="icon-style" alt="Instagram icon" width = "15px" height = "15px"></a>
    </footer> 
    <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>
</html>
