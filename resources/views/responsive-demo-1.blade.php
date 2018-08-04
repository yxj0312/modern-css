<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Responsive Demo 1</title>

    <link rel="stylesheet" href="/css/app.css">

    <style>
        .flex-2 {
            flex: 2;
        }
    </style>
</head>
    <body>

        {{-- We did set a width with 1/4, but if we haven't flex-wrap. it will never break the line --}}
        <div class="md:flex md:flex-wrap">

            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-grey p-4 lg:text-red">1</div>
            </div>

            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-grey p-4">2</div>
            </div>

            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-grey p-4">3</div>
            </div>

            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-grey p-4">4</div>
            </div>

            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-grey p-4">5</div>
            </div>
            
            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-grey p-4">6</div>
            </div>
            
            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-grey p-4">7</div>
            </div>
            
            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-grey p-4">8</div>
            </div>
            
        </div>

        {{-- Just in md --}}
        <div class="border-t py-4 md:flex md:flex-wrap">
            <div class="p-4 flex-1">
                <div class="box bg-grey p-4">1</div>
            </div>

            {{-- flex:2 take twice space as the other items
            4,8,10... u know the basic idea --}}
            <div class="p-4 flex-2">
                <div class="box bg-grey p-4">2</div>
            </div>
            
            <div class="p-4 flex-1">
                <div class="box bg-grey p-4">3</div>
            </div>
            
            <div class="lg:mr-6 p-4 flex-1">
                <div class="box bg-grey p-4">4</div>
            </div>
            
            <div class="p-4 flex-1">
                <div class="box bg-grey p-4">5</div>
            </div>
            
            <div class="p-4 flex-1">
                <div class="box bg-grey p-4">6</div>
            </div>
            
            <div class="p-4 flex-1">
                <div class="box bg-grey p-4">7</div>
            </div>
            
            <div class="p-4 flex-1">
                <div class="box bg-grey p-4">8</div>
            </div>
        </div>

    </body>

</html>