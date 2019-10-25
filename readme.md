HOW TO USE
---

1. Install composer first   
`composer install`
2. Config the database in `.env` file
3. Migrate all table   
`php artisan migrate`
4. If necessary, seed the DB   
`php artisan db:seed --class=UserSeeder`
5. Enjoy


API DOCUMENTATION
---

to make a reward :
   
`/reward`   
method : **POST**
header:   
Content-Type : application/json   
Accept : application/json   
param : `user` specify the user id   
requirements: user can only claim reward once everyday

List all reward today

`/reward`   
method : **GET**   
Content-Type : application/json   
Accept : application/json   
