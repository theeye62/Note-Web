<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('')}}css/app.css">

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <!-- Iconscout Link For Icons -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <title>Notes</title>

    </head>

    <body>

        <div class="popup-box">
            <div class="popup">
                <div class="content">
                    <header>
                        <p>Add a new Note</p>
                        <i class="uil uil-times"></i>
                    </header>
                    <form action="#">
                        <div class="row title">
                            <label>Title</label>
                            <input type="text">
                        </div>
                        <div class="row descripyion">
                            <label>Description</label>
                            <textarea></textarea>
                        </div>
                        <button>Add Note</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <li class="add-box">
                <div class="icon"><i class="uil uil-plus"></i></div>
                <p>Add new note</p>
            </li>
        </div>

        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

    </body>
</html>
