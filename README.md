## Installation

# Build image

```
docker-compose up -d app
```

# run project

```
docker-compose down && docker-compose up -d
```

# Run bash terminal

```
docker-compose run app bash
```

# add config file .env

```
cp env-example .env
```

# Install composer

```
docker-compose exec app composer install

```

# Setup database

```
docker-compose exec app php artisan migrate:refresh --seed
```

# generate key

```
docker-compose exec app php artisan key:generate
```

#######################################

# Step 1: Remove all containers

1. Stop all running containers

```
docker stop $(docker ps -aq)
```

2. Remove all containers

```
docker rm $(docker ps -aq)
```

# Step 2: Remove all images

```
docker rmi $(docker images -q)
```

# Step 3: Rebuild your Docker setup

```
docker-compose up --build
```

# fix error "Please provide a valid cache path"

```
chmod -R 775 bootstrap
cd storage/
mkdir -p framework/{sessions,views,cache}
chmod -R 775 framework

```
