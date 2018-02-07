#  安装

1.create database named laravel-admin

2. generate database struture
    ./artisan admin:install

3. add loclae field to admin_users
     alter table admin_users  add locale varchar(10)

4. Open `http://localhost/admin/`` in browser,use username admin and password admin to login.

# 如何切换语言

1. go to `http://127.0.0.1:8000/admin/auth/setting`


# TODO

1. add `locale` field via database migration
2. make enabled languages in config file instead of the  hard-coded one in `App\Http\Middleware\Locale` middleware.
