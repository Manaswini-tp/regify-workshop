# Workshop Registration System

A simple workshop registration form with PHP backend and MySQL database.

## Features
- Responsive registration form
- Client-side validation
- Secure database storage using prepared statements
- Success/error messaging

## Tech Stack
- HTML5/CSS3
- JavaScript (jQuery)
- PHP
- MySQL

## Installation
1. Clone the repository
2. Copy `dbconfig.example.php` to `dbconfig.php`
3. Update database credentials in `dbconfig.php`
4. Import `database.sql` to your MySQL database
5. Deploy to a PHP server (XAMPP/WAMP/InfinityFree)

## Security
- Prepared statements to prevent SQL injection
- HTML escaping for XSS prevention
- Client-side validation with regex patterns
