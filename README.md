# CRUD Application with PHP, PDO, and MySQL

<p align='center'>
    <img src='https://codeshack.io/web/img/posts/crud-application-php-pdo-mysql.png' width='400'/>
</p>

A Create, Read, Update and Delete application complete with PHP, PDO and MySQL was created. The application completely from scratch, no need for additional frameworks.

A CRUD application is often used in conjunction with a database, interacting with records in a table. We will be using MySQL as our database management system in our application.

A database with a table of contacts, we will be able to manipulate these contacts in our CRUD application, the table of contacts will contain names, emails, phone numbers, etc.

## Tasks performed:

### What was done?

- **Create MySQL Records** — Insert new records into the Contacts table.
- **Read MySQL Records** — Reading MySQL records and display them in an HTML table.
- **Update MySQL Records** — Update existing MySQL records in the Contacts table.
- **Delete MySQL Records** — Confirm and delete records from the Contacts table.
- **GET and POST Requests** — Send data to our app from an HTML form and URL parameters.
- **Prepared Statements** — Secure our SQL statements with prepared statements.

### Requirements:

- **Web Server** — I recommend you download and install XAMPP on your local computer system, this server package includes MySQL, PHP, phpMyAdmin, and the PDO extension.
- **PHP** — I recommend you use the latest version of PHP, but older versions should work just fine (skip if you installed XAMPP).
- **PDO Extension** — Should be enabled by default if you're using XAMPP, but if it's not you'll need to enable/install it.

## File Structure:

```bash
\-- crud-application-php-pdo-mysql
    |-- index.php
    |-- create.php
    |-- read.php
    |-- update.php
    |-- delete.php
    |-- functions/functions.php
    |-- css/style.css
```

## What each file will contain:

- **index.php** — Home page for our CRUD app.
- **create.php** — Create new records with an HTML form and send data to the server with a POST request.
- **read.php** — Display records from our database table and navigate with pagination.
- **update.php** — Update existing records with an HTML form and send data to the server with a POST request.
- **delete.php** — Confirm and delete records by ID (GET request to get the ID).
- **functions.php** — Basic templating functions and MySQL connection function (so we don't have to repeat code in every file).
- **style.css** — The stylesheet for our app, this will change the appearance of our app.

## Creating the Database and setting-up Tables

The MySQL database we'll use to store contacts and retrieve them with PHP. If you're using XAMPP follow the below instructions.

- Navigate to http://localhost/phpmyadmin/
- Click **Databases** at the top
- Under **Create** database input phpcrud and select utf8_general_ci as the collation
- Click **Create**
- Select the newly **created** database
- Click the **SQL** tab and execute the below SQL:

```bash
CREATE TABLE IF NOT EXISTS `contacts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`name` varchar(255) NOT NULL,
  	`email` varchar(255) NOT NULL,
  	`phone` varchar(255) NOT NULL,
  	`title` varchar(255) NOT NULL,
  	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `title`, `created`) VALUES
(1, 'John Doe', 'johndoe@example.com', '2026550143', 'Lawyer', '2019-05-08 17:32:00');
```

## Contributors

<table>
    <thead>
        <tr>
            <td>
                <img src="https://avatars.githubusercontent.com/u/55550732?v=4" width="150px"/>
            </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Mateus Maciel</th>
        </tr>
    </tbody>
</table>

## How to contribute?

1. Fork the project.
2. Create a new branch with your changes: `git checkout -b my-feature`
3. Save the changes and create a commit message telling what you did: `git commit -m Modifying this [...]`
4. Submit your changes: `git push origin my-feature`

## License

-x-