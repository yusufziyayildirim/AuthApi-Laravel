# User Authentication API with Laravel

This project is a user authentication REST API application that I developed by using Laravel and MySql.


## Setup

Firstly, copy the command below. Then open the terminal screen, navigate to the area ın which where you want the project to be installed, paste and run or download with link.

```
git clone https://github.com/yusufziyayildirim/AuthApi-Laravel.git
```

After the cloning process, paste the following codes on the terminal screen in orderly in the project directory and run them.

```
composer update && npm install && npm run dev
```

After this process, convert the `.env.example` file in the main directory into `.env` and enter your database information into the `.env` file. After then, replace the following mail field information with your own mail information.



```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=example
MAIL_PASSWORD=example
MAIL_ENCRYPTION=tls
```

Finally, for a unique code and database operations, paste the following code on the terminal screen and run it respectively.

```
php artisan key:generate && php artisan migrate
```

## Run

Writing the following code in the project directory will run the project.
```
php artisan serve
```

## Postman API Documentation

If you need a document for the request process, you can access the Postman Api document by clicking [here](https://documenter.getpostman.com/view/19173966/VUjLLmuQ).
