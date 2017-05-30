# Documentation

- If you're using Docker as your development environmnent, just clone the repository

$ git clone https://github.com/gabolecointere/instant-search-reaction.git

Move to the project folder and run:

$ docker-compose up

It will download the images if and start the containers. After that, the app should be running on port 3000.

After that, please run:

$ docker-compose exec app php artisan migrate

in order to run the migrations, and

$ docker-compose exec app php artisan db:seed

in order to seed the database with initial data.


- Else, please adjust the configuration of the .env file to your environment requirements and run the corresponding commands to migrate and seed the database.
