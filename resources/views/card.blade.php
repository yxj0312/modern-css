<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CSS for Backend Devs</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="card">
        {{-- left --}}
        <div class="card-left">
            <a href="#" class="card-skill-button">PHP</a>

            <img src="http://via.placeholder.com/90x100">

            <span class="card-difficulty">Intermediate Difficulty</span>
        </div>

        {{-- right --}}
        <div class="card-right">
            <h3 class="card-title"><a href="#">Testing Jargon</a></h3>

            <p class="card-excerpt">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
            </p>

            <div class="card-meta">
                <div>
                    <img src="http://via.placeholder.com/15x15">
                    5 Lessons
                </div>

                <div>
                    <img src="http://via.placeholder.com/15x15">
                    53:10 min
                </div>
            </div>
        </div>
    </div>
</body>

</html>