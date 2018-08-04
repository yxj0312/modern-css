<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Responsive Demo 2</title>

    <link rel="stylesheet" href="/css/app.css">

</head>

<body>
    <div class="container mx-auto">

        <section class="py-10">
            <div class="container">
                <div class="flex justify-center mb-8 pb-3 text-center">
                    <h3 class="text-3xl font-light w-4/5 tracking-tight text-black">
                        The most concise screencasts for the working developer.
                    </h3>
                </div>

                {{-- stats --}}
                <div class="md:flex md:justify-center pb-10">
                    <div class="home-skills-section border border-dashed border-grey py-3 px-2 mx-5 mb-6 md:mb-0 rounded-lg text-center">
                        <strong class="block text-3xl font-normal">1000</strong>
                        <span class="text-grey tw-text-sm">Hours of Learning</span>
                    </div>

                    <div class="home-skills-section border border-dashed border-grey py-3 px-2 mx-5 mb-6 md:mb-0 rounded-lg text-center">
                        <strong class="block text-3xl font-normal">1000</strong>
                        <span class="text-grey tw-text-sm">Lessons</span>
                    </div>

                    <div class="home-skills-section border border-dashed border-grey py-3 px-2 mx-5 mb-6 md:mb-0 rounded-lg text-center">
                        <strong class="block text-3xl font-normal">1000</strong>
                        <span class="text-grey tw-text-sm">Full Series</span>
                    </div>
                </div>

                <div class="md:flex md:justify-around mx-8 mb-10">
                    <div class="flex flex-col bg-grey mb-6 md:mb-0 m-auto md:m-0 text-center">
                        <p>123</p>
                    </div>

                    <div class="flex flex-col bg-grey mb-6 md:mb-0 m-auto md:m-0 text-center">
                        <p>123</p>
                    </div>
                    
                    <div class="flex flex-col bg-grey mb-6 md:mb-0 m-auto md:m-0 text-center">
                        <p>123</p>
                    </div>

                    <div class="flex flex-col bg-grey mb-6 md:mb-0 m-auto md:m-0 text-center">
                        <p>123</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</body>

</html>