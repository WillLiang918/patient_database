# Patient Database

## Project Description
This appplication allows doctors to view patient information.

## Features
- User Authenication
- Single session per user
- Allow doctors to view 'All Patients' and 'My Patients'
- Allow doctors to add new patients to the database
- Flash messages for errors and successful actions

## Languages
- PHP
- HTML
- CSS

## Frameworks
- Laveral/ Eloquent
- Bootstrap

## How to RUN
git clone https://github.com/WillLiang918/sample_app_project.git
rename .env.example to .env and replace APP_KEY with key from email
php artisan migrate:refresh --seed  
php -S localhost:8888 -t public

## Demo Accounts
Log in with any of these demo doctor accounts.
- email: 'john@example.com', password: 'password'
- email: 'mark@example.com', password: 'password'
- email: 'karl@example.com', password: 'password'
