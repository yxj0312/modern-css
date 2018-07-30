<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CSS for Backend Devs</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="flex items-center justify-center">
    <div class="card flex rounded">
        {{-- left --}}
        <div class="card-left rounded flex flex-col justify-between p-6 items-center text-center text-white">
            <a href="#" class="card-skill-button no-underline text-xs rounded-full py-1 px-6 text-inherit">PHP</a>

            <img src="http://via.placeholder.com/90x100">

            <span class="card-difficulty text-xs">Intermediate Difficulty</span>
        </div>

        {{-- right --}}
        <div class="card-right flex flex-col text-grey-darker p-6">
            <h3 class="card-title text-grey-black font-light text-3xl mb-3"><a href="#" class="no-underline text-inherit">Testing Jargon</a></h3>

            <p class="card-excerpt flex-1">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
            </p>

            <div class="card-meta flex text-sm">
                <div class="flex item-center mr-4">
                    <img src="http://via.placeholder.com/15x15" class="mr-2"> 5 Lessons
                </div>

                <div class="flex item-center">
                    <img src="http://via.placeholder.com/15x15" class="mr-2"> 53:10 min
                </div>
            </div>
        </div>
    </div>
</body>

</html>