<!doctype html>
<html lang="{{ app()->getLocale() }}" class="ep14-html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Modal Example</title>

    <style>
        .overlay {
            visibility: hidden;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, .7);
        }

        .overlay:target {
            visibility: visible;
        }

        .modal {
            position: relative;
            width: 600px;
            max-width: 80%;
            background: white;
            border-radius: 8px;
            padding: 1em 2em;
        }

        .modal .close {
            position: absolute;
            top: 15px;
            right: 15px;
            color: grey;
            text-decoration: none;
        }

        .overlay .cancel {
            position: absolute;
            width: 100%;
            height: 100%;
        }
    </style>
</head>


<body>
    <li><a href="#join-modal">Join</a>
    <li><a href="#cancel-modal">Cancel</a>

    @component('_modal', ['name' => 'join-modal'])
        <h1>Pick a plan</h1>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci deleniti saepe odio officia beatae quibusdam quaerat, 
                recusandae laudantium numquam quam provident deserunt obcaecati ullam. Pariatur nobis quisquam numquam asperiores atque.
        </p>    
    @endcomponent

    @component('_modal', ['name' => 'cancel-modal'])
        <h1>Leaving So Soon?</h1>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci deleniti saepe odio officia beatae quibusdam quaerat, 
                recusandae laudantium numquam quam provident deserunt obcaecati ullam. Pariatur nobis quisquam numquam asperiores atque.
        </p>

        <p>
            <a href="#join-modal">Sign up.</a>
        </p>    
    @endcomponent
</body>
