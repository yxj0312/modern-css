<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pricing Plans</title>

    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="font-body p-6">
    <div class="container mx-auto">
       <div class="flex">
            @include('plan')
            {{-- @include('plan',['name' => 'Monthly']) --}}

            @include('plan')

            @include('plan')

            @include('plan')
       </div>
    </div>
</body>

</html>