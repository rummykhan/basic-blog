

## Setup

- Clone this repo using `git clone git@github.com:rummykhan/basic-blog.git`
- Goto project dir `cd basic-blog`
- Create .env file `cp .env.example .env`
- Run `composer install`
- Create app key `php artisan key:generate`
- Update db in `.env`
- Run migrations `php artisan migrate`
- Run migrations `php artisan db:seed --class=PostTableSeeder` to seed some posts to work with
- Run your app using `php -S localhost:1234 -t public`
- Goto browser `http://localhost:1234`, you should see the app.


#### Contact Us
[rehan_manzoor@outlook.com](mailto:rehan_manzoor@outlook.com)
