docker build -t auth0-symfony-web-app .
docker run --env-file .env -p 8000:8000 -it auth0-symfony-web-app
