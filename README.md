# Registration Form

A simple HTML registration form that stores user data in a MySQL database using PHP.
**Note:** GitHub Pages supports only static files, so the database functionality will not work directly on GitHub hosting. Follow the steps below to run the project on your local system.

---

## Features

* User registration form (HTML + CSS)
* Fields: Full Name, Email, Phone, Gender, Address
* Data stored in MySQL database using PHP
* Basic client-side validation

---

## Technologies Used

* HTML
* CSS
* PHP
* MySQL
* XAMPP Server

---

## How to Run on Your System

### 1. Install XAMPP

Download and install XAMPP:
[https://www.apachefriends.org/](https://www.apachefriends.org/)

After installation open **XAMPP Control Panel** and start:

* Apache
* MySQL

---

### 2. Create Database

1. Open browser and go to:
   [http://localhost/phpmyadmin](http://localhost/phpmyadmin)

2. Create a new database:

```
registration_db
```

3. Run this SQL to create table:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(15),
    gender VARCHAR(10),
    address VARCHAR(255)
);
```

---

### 3. Project Setup

1. Go to:

```
C:\xampp\htdocs\
```

2. Create folder:

```
registration-form
```

3. Place these files inside that folder:

* index.html
* style.css
* save.php

---

### 4. save.php Database Connection

Make sure your `save.php` contains:

```php
$conn = mysqli_connect("localhost", "root", "", "registration_db");
```

---

### 5. Run Project

Open browser and visit:

```
http://localhost/registration-form/index.html
```

Submit the form and check data in:

```
phpMyAdmin → registration_db → users table
```

---

## Important Note

This project will NOT store data on GitHub Pages because:

* GitHub supports only static hosting
* PHP and MySQL cannot run on GitHub
* Database works only on local server or real PHP hosting

To deploy online with database you need services like:

* InfinityFree
* 000webhost
* Render / Railway (for Node version)

---

## Author

Created for learning purpose as a beginner web development project.
