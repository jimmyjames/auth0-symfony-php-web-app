# Auth0 + Symfony Seed

This is the seed project you need to use if you're going to create a Symfony app that will use Auth0.

## Running the example

In order to run the example you need to have `composer` and `php` installed.

You also need to set the ClientSecret, ClientId, Domain and Audience for your Auth0 app as environment variables with the following names respectively: `AUTH0_CLIENT_SECRET`,`AUTH0_CLIENT_ID`, `AUTH0_DOMAIN` and `AUTH0_AUDIENCE`.

For that, create a new file with the following code and save it as `.env` file in the directory and set the values like the following:

```
# .env file
AUTH0_CLIENT_SECRET=YOUR_CLIENT_SECRET
AUTH0_CLIENT_ID=YOUR_CLIENT_ID
AUTH0_DOMAIN=YOUR_DOMAIN
AUTH0_AUDIENCE={API_AUDIENCE}
```

__Note:__ If you are not implementing any API, leave the `AUTH0_AUDIENCE` variable empty, will be set with `https://AUTH0_DOMAIN/userinfo`.

Once you've set those environment variables, install the dependencies by running the following command:

```
composer install
```

Now you can use Apache or the built-in server:

```
php bin/console server:start 3000
```

Try calling [http://localhost:3000/](http://localhost:3000/)


## Running the example with docker

In order to run the example with docker you need to have `docker` installed.

You also need to set the environment variables as explained [previously](#running-the-example).

Execute in command line `sh exec.sh` to run the Docker in Linux, or `.\exec.ps1` to run the Docker in Windows.

## What is Auth0?

Auth0 helps you to:

* Add authentication with [multiple authentication sources](https://docs.auth0.com/identityproviders), either social like **Google, Facebook, Microsoft Account, LinkedIn, GitHub, Twitter, Box, Salesforce, among others**, or enterprise identity systems like **Windows Azure AD, Google Apps, Active Directory, ADFS or any SAML Identity Provider**.
* Add authentication through more traditional **[username/password databases](https://docs.auth0.com/mysql-connection-tutorial)**.
* Add support for **[linking different user accounts](https://docs.auth0.com/link-accounts)** with the same user.
* Support for generating signed [Json Web Tokens](https://docs.auth0.com/jwt) to call your APIs and **flow the user identity** securely.
* Analytics of how, when and where users are logging in.
* Pull data from other sources and add it to the user profile, through [JavaScript rules](https://docs.auth0.com/rules).

## Create a free account in Auth0

1. Go to [Auth0](https://auth0.com) and click Sign Up.
2. Use Google, GitHub or Microsoft Account to login.

## Author

[Auth0](https://auth0.com)

## License

This project is licensed under the MIT license. See the [LICENSE](LICENSE) file for more info.
