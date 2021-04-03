To install project run:

1 composer install
2 then copy .env.example to .env
3 set up your DB connection in .env and your MailTrap account (or other mail service) 
4 php artisan migrate
5 php artisan queue:work
That's all!
