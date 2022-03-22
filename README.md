<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://rickandmortyapi.com/api/character/avatar/1.jpeg" width="200"></a><img src="https://rickandmortyapi.com/api/character/avatar/2.jpeg" width="200"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Rick and Morty (GraphQL & PHP-Laravel)

**Laravel** is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## Requirements 
- docker-compose

## How to run 
- clone the repository locally
- run [docker-compose up -d] 
- run [docker exec rickandmorty_myapp_1 php artisan migrate]
- navigate to localhost:8000

## GraphQL query (eg: search rick)
<a target="_blank" href="http://localhost:8000/graphql?query={characters(name:%22rick%22){id,name,status,origin{url,name}location{url,name}%20image,episode{url}url,created}}">Search Rick</a>
