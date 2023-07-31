<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## API Rest con Laravel

Curso de Platzi

### Ejecutar servidor de desarrollo
```sh
php artisan serve
```

### Ejecutar las Migraciones y los Seeders
```sh
php artisan migrate --seed
```

# API Documentation - Laravel Routes

## Introduction
This document provides a detailed description of the endpoints available in the Laravel API. The API serves as a platform for managing posts, and it supports multiple versions. Authentication is required to access certain endpoints.

## Authentication
The API uses Sanctum for authentication. To access protected endpoints, clients must include a valid authentication token in the request headers.

## Version 1 Endpoints

### Retrieve all posts
- URL: `/v1/posts`
- Method: `GET`
- Description: This endpoint allows users to retrieve a list of all posts in version 1.
- Authentication: Required (using Sanctum token)
- Response: A JSON array containing post objects with their respective details.

### Retrieve a single post
- URL: `/v1/posts/{id}`
- Method: `GET`
- Description: This endpoint retrieves a specific post from version 1 based on its `id`.
- Authentication: Required (using Sanctum token)
- Response: A JSON object containing the post details.

### Delete a post
- URL: `/v1/posts/{id}`
- Method: `DELETE`
- Description: This endpoint allows users to delete a post in version 1 based on its `id`.
- Authentication: Required (using Sanctum token)
- Response: A JSON object with a `message` indicating the successful deletion.

## Version 2 Endpoints

### Retrieve all posts v2
- URL: `/v2/posts`
- Method: `GET`
- Description: This endpoint allows users to retrieve a list of all posts in version 2.
- Authentication: Required (using Sanctum token)
- Response: A JSON array containing post objects with their respective details.

### Retrieve a single post v2
- URL: `/v2/posts/{id}`
- Method: `GET`
- Description: This endpoint retrieves a specific post from version 2 based on its `id`.
- Authentication: Required (using Sanctum token)
- Response: A JSON object containing the post details.

## User Login

### User Login
- URL: `/login`
- Method: `POST`
- Description: This endpoint allows users to log in and obtain an authentication token.
- Request Body: A JSON object containing `email` and `password` fields.
- Response: A JSON object containing the authentication token and user details.

#### Example Request Body:
```json
{
    "email": "user@example.com",
    "password": "secret_password",
    "name": "ex: tablet|pc|android|iphone"
}
