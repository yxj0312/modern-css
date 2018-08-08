<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reverse the order</title>

    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="container mx-auto">
        <div class="pb-10 lg:flex">
            <div class="lg:w-4/5 lg:pr-10">
                <div class="flex flex-col-reverse lg:flex-row lg:mb-10">
                    <div class="p-3">
                        <div class="bg-red p-3 md:mb-2">
                            <p>1.</p>
                        </div>
                    </div>
                    
                    <div class="p-3">
                        <div class="bg-blue p-3 md:mb-2">
                            <p>2.</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="p-3">
                        <div class="bg-purple p-3 md:mb-2">
                            <p>3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>