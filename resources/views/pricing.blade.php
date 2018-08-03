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
            @include('plan',[
                'name' => 'Monthly', 
                'price' => '15', 
                'description' => 'Still undecided? Ease in with a monthly plan that can be canceled in ten seconds.',
                'url'=>'/image/marketing.png'
                ])

            @include('plan',[
                'name' => 'Yearly', 
                'price' => '99', 
                'description' => "This is your career we're takling about. Go all in, and save 20% off the monthly rate.",
                'url'=>'/image/pay-per-click.png'
                ])

            @include('plan',[
                'name' => 'Forever', 
                'price' => '350', 
                'description' => "We get it. Not everyone loves subscriptions. Pay once, and access Laracasts forever.",
                'url'=>'/image/project.png'
                ])

            @include('plan',[
                'name' => 'Teams', 
                'price' => '300', 
                'description' => "Follow in the steps of thousands of compaines who have elevated their teams to the next level.",
                'url'=>'/image/web-optimization.png'
                ])
       </div>
    </div>
</body>

</html>