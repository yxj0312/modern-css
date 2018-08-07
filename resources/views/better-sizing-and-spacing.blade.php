<!doctype html>
<html lang="{{ app()->getLocale() }}" class="ep13-html">
{{-- <html class="text-xs lg:text-base "> --}}

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Better Sizing And Spacing</title>

    <link rel="stylesheet" href="/css/app.css">

    {{-- <style>
        html { font-size: 16px;}

        @media screen and  (max-width:992px) {
            html { font-size: 14px}
        }

        @media screen and  (max-width:767px) {
            html { font-size: 12px}
        }
        /* 40/16 = 2.5rem */
        h1 { font-size: 2.5rem;}
        h2 { font-size: 2.187rem;}
        h3 { font-size: 1.75rem;}
        h4 { font-size: 1.375rem;}
    </style> --}}

    <style>
        /* overwrite ur css file */
        .content > * { margin-bottom: 1em; }
        .section { padding-left: 20px; padding-right: 20px;}
    </style>

</head>

<body>
    <div class="section">
        <div class="container mx-auto">
            <header>
                {{-- by tailwind, all of ur textsizes are already used rem --}}
                <h1 class="text-3xl mb-8">Laracasts</h1>
            </header>
            <main class="content">
                <h2>About Us</h2>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                    et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                    dolor sit amet.
                </p>
        
                <h2>Our Mission</h2>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                    et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                    dolor sit amet.
                </p>
                <h3>How We Get There...</h3>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                    et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                    dolor sit amet.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                    et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                    dolor sit amet.
                </p>
            </main>
        </div>
    </div>
</body>

</html>

