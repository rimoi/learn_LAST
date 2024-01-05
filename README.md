# LEARN LAST ( Live components, Asset mapper, Stimulus and Turbo )
In this tutorial, I will learn/use the new components of Symfony 
LAST (Live components, Asset mapper, Stimulus, and Turbo)
by applying them to a concrete example, such as creating an extraterrestrial travel agency.

### Technology used for this project

1. [x] Symfony 6.4
2. [x] PHP 8.2


## Setup

If you've just downloaded the code, congratulations!!

To get it working, follow these steps:

### Download Composer dependencies

Make sure you have [Composer installed](https://getcomposer.org/download/)
and then run:

```
composer install

composer dump-env dev # To create dev environment
```

### Database Setup

The code comes with a `compose.yaml` file (for Docker) and we recommend using
Docker to boot a database container. You will still have PHP installed
locally, but you'll connect to a database inside Docker. This is optional,
but I think you'll love it!

First, make sure you have [Docker installed](https://docs.docker.com/get-docker/)
and running. To start the container, run:

```
docker compose up -d
```

Next, build the database and the schema with:

```
# "symfony console" is equivalent to "bin/console"
# but its aware of your database container
symfony console doctrine:database:create --if-not-exists
symfony console doctrine:schema:create
symfony console doctrine:fixtures:load
```

If you do *not* want to use Docker, just make sure to start your own
database server and update the `DATABASE_URL` environment variable in
`.env` or `.env.local` before running the commands above. A simple way
to get the code running is to uncomment the `DATABASE_URL="sqlite...`
line in `.env` to use SQLite.

### Start the Symfony web server

You can use Nginx or Apache, but Symfony's local web server
works even better.

To install the Symfony local web server, follow
"Downloading the Symfony client" instructions found
here: https://symfony.com/download - you only need to do this
once on your system.

Then, to start the web server, open a terminal, move into the
project, and run:

```
symfony serve:start -d
```

(If this is your first time using this command, you may see an
error that you need to run `symfony server:ca:install` first).

Now check out the site at `https://localhost:8000`

Have fun!


