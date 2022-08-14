# Enrolles-registration-page-Laravel
Web-service for enrollee registration with input form valiadtion and registered enrollees displaying with search by name, surname or group number and sorting by these fields 

# Demonstration:
https://user-images.githubusercontent.com/42892474/184546329-07a75117-a4b5-4971-a0cd-a430edabbb03.mp4

# Launch:
1. `composer update`
2. rename `.env.example` to `.env`
3. create database `enrollees_db` in XAMPP or OpenServer
4. run `php artisan migrate`
5. run `php artisan serve`
6. open `http://127.0.0.1:8000/initialize` for initializing db
7. open `http://127.0.0.1:8000/enrollee/create` as a start page
