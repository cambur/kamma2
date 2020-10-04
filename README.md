# Kamma Test Part 2

- Create this form and an appropriate database or datastore schema. 
- Store all appropriate information and send an email

## Requirements

- PHP 7.4

## Set up

- Save the file **.env.example** as **.env**

- Set up your mailtrap credentials in the .env file that you just created.

- Create a simple sqlite database file_

```console
$ touch database.sqlite
```

- Run migrations:

```console
$ php artisan migrate
```

- Run the server:

```console
$ php artisan serve
```


## Backlog

A few aspects to improve

- Work on throttling possible spam attacks
- Add a captcha
- Add fail test cases
- Improve email template
- Improve responsive design
- Add a loader
- Handle exceptions
