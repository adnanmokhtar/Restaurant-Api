# Restaurant Application using Laravel Framework and Docker
This repository provides you a development environment without requiring you to install PHP, a web server, and any other server software on your local machine. For this, it requires Docker.


## Docker Image

These docker images are configured in `Dockerfile` file.

Building the Docker Image
* sudo docker build -t restaurants-image .

Running the Docker Image Using Docker
* sudo docker run -p 8000:8000 restaurants-image

Running the API endpoint for filtering and sorting in browser or postman
* http://127.0.0.1:8000/api/restaurants?city=cairo&min_price=400&max_price=600&name=Phyllys&sort=-price;+name

Running the unit test 
* sudo docker exec -it <php-fpm-container> /bin/bash
* php vendor/bin/phpunit

## Licence

This work is under [MIT](LICENCE) licence.
