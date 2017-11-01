docker build -t auth0-symphony-web-app .
docker run --env-file .env -p 8000:8000 -it auth0-symphony-web-app
