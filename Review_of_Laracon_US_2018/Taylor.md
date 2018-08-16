# Keynote
### Speaker: Taylor Otwell
### Schedule: 2017.7.25 17:30
### Duration: 1:32:49
### Links: [Taylor Otwell - Keynote - Laracon US 2018](https://www.youtube.com/watch?time_continue=149&v=pLcM3mpZSV0)
### Contents:

#### New Features of laravel 5.7:
- Email verification: 
    ```php
    MustVerifyEmail
    ```
- Policy can be called with 'guest' users(aren't logged in)

- Dump server from Symphony: 
    ```php 
    php artisan dump-server
    ``` 

- handful of other small quality improvements syntax for route action urls

- **Laravel Nova**

    - a single pageview application
    - using tailwind css
    - laravel json api feeding all this data
    - CRUD scenarios (10:13 - 17:41)
    - data field
        - timezone auto offset with DB and browser time (~19:11)
        - blog text area: 
            - markdown/Trix editor
            - Code field: display json data(or other language like php)
                ```php
                Code::make('Options')->json()->rules('json')
                ```
    - file field: for file upload (begin at 23:46)