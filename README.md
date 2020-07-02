# GreenCo

## Install

Docker-compose used from [DigitalOcean](https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose)

```sh
$ cd greenco // if not in root of project
$ docker run --rm -v $(pwd):/app composer install
$ sudo chown -R $USER:$USER ./
$ docker-compose up -d --build
$ docker-compose exec app php artisan migrate:refresh --seed
```

Open [localhost](http://localhost)

Can use these login details:
    email: admin@admin.com
    password: password