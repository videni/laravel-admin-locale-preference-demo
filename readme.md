#  安装

1. install depedencies
```
    composer install -vvv --profile --prefer-dist
```
2. create database named `laravel_admin`

3. generate database struture
```
    ./artisan admin:install
```
4. run `./artisan serve`

5. Open `http://127.0.0.1:8000/admin/` in browser,use username `admin` and password `admin` to login.

# 如何切换语言

1. go to `http://127.0.0.1:8000/admin/auth/setting`

2.  gif preview
![](https://drive.google.com/uc?export=view&id=1PsQniovVZTIY96eTLL99a_ZE6E2zWJGi)

# TODO

1. make enabled languages in config file instead of the  hard-coded one in `App\Http\Middleware\Locale` middleware.
