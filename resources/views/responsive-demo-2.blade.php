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
        <div class="md:min-h-screen md:flex md:flex-col bg-grey">
            <header class="bg-red section">
                <h1>My Site</h1>
            </header>
            
            <div class="md:flex md:flex-1">
                <aside class="bg-green section">
                    Sidebar.
                </aside>
            
                <main class="bg-blue md:flex-1 section">

                    <div class="flex flex-wrap">

                        {{-- Or instead of explicit width, u can do flex-1 --}}
                        <div class="p-3 w-1/2 md:w-1/4">
                            <div class="bg-grey-light p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        
                        <div class="p-3 w-1/2 md:w-1/4">
                            <div class="bg-grey-light p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        
                        <div class="p-3 w-1/2 md:w-1/4">
                            <div class="bg-grey-light p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        
                        <div class="p-3 w-1/2 md:w-1/4">
                            <div class="bg-grey-light p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>

                        <div class="p-3 w-1/2 md:w-1/4">
                            <div class="bg-grey-light p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        
                        <div class="p-3 w-1/2 md:w-1/4">
                            <div class="bg-grey-light p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        
                        <div class="p-3 w-1/2 md:w-1/4">
                            <div class="bg-grey-light p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        
                        <div class="p-3 w-1/2 md:w-1/4">
                            <div class="bg-grey-light p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        
                    </div>
                    
                </main>
            </div>
            
            <footer class="bg-black text-white section">
                Copyright 2018
            </footer>
        </div>
    </div>

</body>

</html>