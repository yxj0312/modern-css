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
> redis
```php
public function handle(){
    Redis::throttle('key')->allow(1)->every(5)->then(function() {
        // job logic...

        sleep(1);
    }, function() {
        // with a delay of 10 seconds
        return $this->release(10)
    })
}
```
---