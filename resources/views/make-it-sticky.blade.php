<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Make It Sticky</title>

    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="container">
        <header class="mb-6 text-center">
            <h1 class="text-3xl mb-1">The Laracast Index</h1>
        </header>

        <div class="lg:mx-10 lg:px-10">
            @for ($i = 1; $i < 25; $i++)
                <section class="lg:flex lg:items-start">
                    {{-- position:sticky; top:0 --}}
                    <h3 class="sticky pin-t font-bold text-2xl text-center text-left text-black mb-6 lg:mr-10 bg-grey-light lg:bg-transparent">
                        {{ $i }}
                    </h3>

                    <div class="lg:flex lg:flex-wrap">
                        @for ($j = 0; $j < 100; $j++)
                            <a class="btn text-xs">{{$j}}</a>
                        @endfor
                    </div>
                </section>

            @endfor
        </div>
    </div>
</body>

</html>