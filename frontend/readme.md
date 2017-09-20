# Codetest frontend

Laravel based frontend for the codetest API

app/Codetest/ contains a class that does api requests

app/Providers/ contains a service provider for it

app/Http/Controllers/ has controllers that are using json api

# Build

```
composer install
cp .env.example .env
```

# Run
```
php artisan key:generate
php artisan serve
```

# Tests
```
# There are literally 2 tests due to the fact that I ran out of time
phpunit
```

# Potential improvements
* Realistically since we have existing API there is no reason to use php at all. This could be written using react/any other js frontend
* Since I am not familiar with the data format it was hard for me to make an assessment which data points are more important than others so it might look a bit funky
* Would be nice to have some sort of data transformation layer e.g. fractal
* Would be nice to have browser tests using laravel/dusk
* Would be nice to have unit tests