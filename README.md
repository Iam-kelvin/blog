# blog
* Create a copy of .env.example and rename it to .env
* Generate an application key `php artisan key:generate`
* Create database 'blog'
* Run migration script `php artisan migrate`
* Run seeder `php artisan db:seed --class="QuestionsSeeder"`

Other jazz
```
php artisan cache:clear 
php artisan config:clear
```