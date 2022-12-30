# Laravel Feedback Demo Project

## Screenshots

![](/screen/screen1.png)
![](/screen/screen2.png)
![](/screen/screen3.png)
![](/screen/screen4.png)
![](/screen/screen5.png)

## Setup
> git download <br>
> cmd run <br>
> git clone https://github.com/imcanugur/Laravel-Feedback-Demo-Project.git <br>
> cd Laravel-Feedback-Demo-Project <br>
> composer install <br>
> copy .env.example .env <br>
> .env file edit <br>
> php artisan key:generate <br>
> php artisan storage:link <br>
> php artisan migrate:fresh --seed <br>
> php artisan serve <br>
> open http://127.0.0.1:8000/ <br>
> admin information (e-mail: admin1@gmail.com, ..., admin9@gmail.com | password: admin) <br>

## Api Run
### Setup
Postman Download
> https://www.postman.com/downloads/

### Run
Copy and paste the links below into Postman

#### All-Feedback ( Method = GET )
> http://localhost:8000/api/all-feedback

#### Show-Feedback (id = 1, Method = GET)
> http://localhost:8000/api/feedback/1

#### Add-Feedback ( Method = POST )
> http://localhost:8000/api/feedback/?name=denemeapi3&mail=denemeapi3@gmail.com&message=Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptatum minima est sapiente, modi iste id corporis nesciunt sint rem ipsa quod corrupti, natus quis repudiandae, unde itaque voluptates? Quae.

#### Update-Feedback (id = 50, Method = PUT)
> http://localhost:8000/api/feedback/50/?name=denemeapi3&mail=denemeapi3@gmail.com&message=Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptatum minima est sapiente, modi iste id corporis nesciunt sint rem ipsa quod corrupti, natus quis repudiandae, unde itaque voluptates? Quae.

#### Delete-Feedback (id = 1, Method = DELETE)
> http://localhost:8000/api/feedback/1/

