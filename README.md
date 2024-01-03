## Zion Halls

[![Laravel Forge Site Deployment Status](https://img.shields.io/endpoint?url=https%3A%2F%2Fforge.laravel.com%2Fsite-badges%2F84e223dc-0071-49e2-a3d8-22b547196a81%3Fdate%3D1%26commit%3D1&style=plastic)](https://forge.laravel.com/servers/747479/sites/2206444)

![Zion Halls](/public/img/docs/demo.png)

**Zion Halls** is an app with the purpose of providing a place to learn from world influencers that have the mission to 
help escape the matrix and live a life of freedom and abundance.

## Contributing

If you want to contribute to this project, you can do so by following the steps below:

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/new_feature`)
3. Commit your Changes (`git commit -m 'Add some new feature'`)
4. Push to the Branch (`git push origin feature/new_feature`)
5. Open a Pull Request
6. Wait for approval

## Requirements

1. PHP 8.3
2. Composer
3. NodeJS
4. Docker

## Installation

1. Clone the repo
   ```sh
   git clone git@github.com:albertorsesc/zionhalls.com.git
   ```
2. Install Composer dependencies
   ```sh
   composer install
   ```
3. Create a copy of your .env file
   ```sh
   cp .env.example .env
   ```
4. Generate an app encryption key
   ```sh
    php artisan key:generate
    ```
5. Build Docker
   ```sh
    sail build --no-cache
    ```
6. Start the Docker containers
   ```sh
    sail up
    ```
7. Install NPM dependencies
   ```sh
    sail npm install
    ```
8. Run the migrations
   ```sh
    sail artisan migrate --seed
    ```
9. Run the tests
   ```sh
    sail composer tests
    ```
10. Add the following line to your hosts file
   ```sh
    127.0.0.1 zionhalls.test
   ```
11. Visit [http://zionhalls.test](http://zionhalls.test)
