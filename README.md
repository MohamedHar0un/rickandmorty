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
- **docker** 
- **docker-compose**

## How to run 
- clone the repository locally
- run [**docker-compose up -d**] 
- run [**docker exec rickandmorty_myapp_1 php artisan migrate**]
- navigate to <a href="localhost:8000/graphql-playground">Play ground</a> or <a target="_blank" href="http://localhost:8000/graphql?query={characters(name:%22rick%22){id,name,status,origin{url,name}location{url,name}%20image,episode{url}url,created}}">Search Rick</a> example
## Where to look 
- for GraphQL schema it will my-project/graphql/schema.graphql
- for GraphQL database queries my-project/app/GraphQL/Queries/CharacterQuery.php
- for external api Service to initiate fetch data client my-project/app/Services/Client.php
- also my-project/app/Services/RickAndMortyService.php to make the api call and get the characters from the api [used in the seed database migration]
- to look at building the database and seeding it with data  my-project/database/migrations
## GraphQL query (example: search rick)
- <a target="_blank" href="http://localhost:8000/graphql?query={characters(name:%22rick%22){id,name,status,origin{url,name}location{url,name}%20image,episode{url}url,created}}">Search Rick</a>
- Also you can use the play ground <a target="_blank" href="http://localhost:8000/graphql-playground">Here</a>

## Notes
- this solution is build using a library called lighthouse to integrate laravel with graphql
- i used a library called scout to enable search queries 


## You might encounter an error running the machine
- please install composer from <a href="https://getcomposer.org/">Here</a>
- navigate to rickandmorty/my_project directory 
- run [composer update --ignore-platform-req=ext-curl]
- go back to rickandmorty/ directory where you have docker-compose.yml file and run [docker-compose up -d] 



