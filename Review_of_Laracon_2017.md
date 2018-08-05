# State of Laravel 
### Speaker: Taylor Otwell
### Schedule: 2017.8.29 17:00
### Duration: 53:42
### Links: [Taylor Otwell - State of Laravel - Laracon EU 2017](https://www.youtube.com/watch?v=2pLL00WR5iU&index=12&list=PLMdXHJK-lGoBFZgG2juDXF6LiikpQeLx2)
### Component:
#### Opening:
- in live code the  whole time
- laravel 5.5 stuffs
- laravel horizon/demo for another features

### Misc
- 1:06 - color scheme of sublime text: github inspire/font: operator mono font

### 5.5 Stuffs

- 1:50 -  new helpes: optional

```php 
Route::get('/optional', function() {
    dd(Auth::user());
    
    if(optional(Auth::user())->doSomething(){
        return 'Did Something!'
    })

    return 'Did Nothing'
})
```
> use this, people don't need to check null like

```php
{{Auth::user() && Auth::user()->doSomething() ? 'yes':'no'}}
```
> just

```php
{{optional(Auth::user())->doSomething() ? 'yes': 'no'}}
```
----
- 3:54 - horizon for queue
> https://laravel.com/docs/5.6/horizon

- 5:15 - time-based expirations
> retryUntil method in job

- 6:35 - another approach to how you can deal with job timeouts:
rate limiting
> Duration based rate limiting (using redis)
```php
Route::get('/rate', function(){
    for ($i=0; $i < 10; $i++) { 
        App\Jobs\RateLimitedJob::dispatch();
    }

    return 'OK';
})


public function handle(){
    // 'key' could be: 'job.name'.$this->id
    Redis::throttle('key')->allow(1)->every(5)->then(function() {
        // job logic...

        sleep(1);
    }, function() {
        // with a delay of 10 seconds
        return $this->release(10)
    })
}
```
>Concurrency based rate limiting (using redis)

- 9:30 - lets say: we have four jobs that update like nginx configurations a restart PHP fpm(like forge) and we really only want one job at the time restarting PHP fpm on any given server because if you have a bunch of jobs competing to restart fpm you can kind of get fpm in this you can basically get it in this error state where it's not running at all
```php
Route::get('/concurrent', function() {
    for ($i=0; $i < 10; $i++) { 
        App\Jobs\ConcurrencyLimitedJob::dispatch();
    }

    return 'OK';
})

<!-- Limit to one job running at a time -->
public function handle(){
    Redis::throttle('key')->limit(1)->then(function() {
        info(now()->toDateTimeString());

        sleep(2);
    }, function() {
        return $this->release(2)
    })
}

<!-- It will be very useful to use the retryUntil method because you don't relly know how long it's gonna be before you can acquire a log you might try you job ten times before a lot becomes available so it's a little bit eaiser to think of it in terms of a time-based timeout instead of  an attempt space timeout beacuase you could have in a lot of attempts without something neccessarily being wrong -->

public function retryUntil() {

}
```
