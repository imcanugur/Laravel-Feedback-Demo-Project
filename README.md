# Laravel Feedback Demo Project

## Screenshots

![](/screen/screen1.png)
![](/screen/screen2.png)
![](/screen/screen3.png)
![](/screen/screen4.png)
![](/screen/screen5.png)

## Setup
> git download 

> cmd run

> git clone https://github.com/imcanugur/Laravel-Feedback-Demo-Project.git

> cd Laravel-Feedback-Demo-Project

> composer install

> copy .env.example .env

> .env file edit

> php artisan key:generate

> php artisan storage:link

> php artisan migrate:fresh --seed

> php artisan serve

> open http://127.0.0.1:8000/

> admin information (e-mail: admin1@gmail.com, ..., admin9@gmail.com | password: admin)


## Api Run

### Setup
Postman Download
> https://www.postman.com/downloads/

### Run
Copy and paste the links below into Postman

#### All-Feedback (Method = GET)
> http://localhost:8000/api/all-feedback

#### Show-Feedback (id = 1, Method = GET)
> http://localhost:8000/api/feedback/1

#### Add-Feedback (Method = POST)
> http://localhost:8000/api/feedback/?name=denemeapi3&mail=denemeapi3@gmail.com&message=Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptatum minima est sapiente, modi iste id corporis nesciunt sint rem ipsa quod corrupti, natus quis repudiandae, unde itaque voluptates? Quae.

#### Update-Feedback (id = 50, Method = PUT)
> http://localhost:8000/api/feedback/50/?name=denemeapi3&mail=denemeapi3@gmail.com&message=Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptatum minima est sapiente, modi iste id corporis nesciunt sint rem ipsa quod corrupti, natus quis repudiandae, unde itaque voluptates? Quae.

#### Delete-Feedback (id = 1, Method = DELETE)
> http://localhost:8000/api/feedback/1/
