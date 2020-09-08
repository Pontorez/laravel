# Task description

Create a news system that contains categories and comments for the news. Use Laravel framework + MySQL. The layout can be written in pure HTML, but the use of frameworks like Bootstrap is encouraged.

Functional requirements:
- The ability to add / edit / delete news (headline, text, date, category)
- Page with news list and pagination
- A page with one news, a list of comments and a form for adding a comment
- CRUD categories
- Tags and filtering by tags

# Requirements

- PHP 7.3+

# Installation

1. ```git clone https://github.com/Pontorez/laravel.git```
2. ```cd laravel```
3. ```composer update```
4. ```cp .env.example .env```
5. Set database connection params in ```.env```
6. ```php artisan key:generate```
7. ```php artisan migrate```
8. ```php artisan db:seed```

# Demo

https://laravel.pontorez.com/
