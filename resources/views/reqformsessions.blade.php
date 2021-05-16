<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Request Form</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
            text-align: center;
            background-color: #2a3d45;

            background-position: center center;
            color: #000;
        }

        #ourmanna-verse {
            text-align: center;
            font-size: 15px;
            color: #000;
            padding: 50px;
        }

        a {
            color: #1E90FF;
        }

        a:hover {
            color: #FFA500;
            text-decoration: none;
        }

        .cont {

            width: 700px;
            margin: auto;
            padding-top: 25px;
            padding-bottom: 25px;
            font-size: 20px;

        }

        label {

            cursor: pointer;
            display: inline-block;
            padding: 3px 6px;
            text-align: center;
            margin-left: auto;
            width: 250px;
            vertical-align: top;
        }

        input {
            border: 2px solid;
            border-radius: 5px;
            font-size: 10px;
            margin: 0.25rem;
            min-width: 125px;
            padding: 0.5rem;
            transition: background-color 0.5s ease-out;
            width: 500px;
            position: right;
        }

        fieldset {
            border: none;
            border-radius: 2px;
            margin-bottom: 12px;
            overflow: hidden;
            padding: 0 .625em;
        }

        input::placeholder {
            color: gray;
        }

        input:hover {

            color: #003566;
        }

        button {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: left;
        }

        h1 {

            padding-top: 50px;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-white-100 dark:bg-white-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-white-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-white-700 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-white-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif


        <h1 style="color: #ECECEC;;"><strong> Request Form </strong></h1>
        <div id="ourmanna-verse">Initializing...</div>
        <div class="cont">

            <fieldset>
                <form action="/bible-study-create-form" method="POST" board.php>
                    @csrf
                    <input type="hidden" value=" {{ $bs->id }} " name="id">

                    <label for="name">Complete Name:</label>
                    <input type="text" value=" {{ $bs->name }} " name="name"><br>

                    <label for="email">Email:</label>
                    <input type="text" value=" {{ $bs->email }} " name="email"><br>

                    <label for="number">Contact Number:</label>
                    <input type="tel" value=" {{ $bs->number }} " name="number"><br>

                    <label for="bdate">Birth Date:</label>
                    <input type="date" value=" {{ $bs->bdate }} " name="bdate"><br>

                    <label for="relaff">Religion:</label>
                    <input type="text" value=" {{ $bs->relaff }} " name="relaff"><br>

                    <label for="bsdate">Bible Study Date:</label>
                    <input type="date" value=" {{ $bs->bsdate }} " name="bsdate"><br>

                    <label for="bstime">Bible Study Time:</label>
                    <input type="time" value=" {{ $bs->bstime }} " name="bstime"> <br>

                    <label for="bslocation">Bible Study Location :</label>
                    <input type="text" value=" {{ $bs->bslocation }} " name="bslocation"><br><br><br>

                    <button type="submit" value="Submit and Save">Submit</button>
                </form>
            </fieldset>
        </div>
    </div>
    </div>
</body>


<script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>

</html>