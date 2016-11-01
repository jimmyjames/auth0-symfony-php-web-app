# Auth0 + Symfony Seed

This is the seed project you need to use if you're going to create a Symfony app that will use Auth0.

## Running the example

In order to run the example you need to have `composer` and `php` installed.

You also need to set the ClientSecret, ClientId and Domain for your Auth0 app as enviroment variables with the following names respectively: `AUTH0_CLIENT_SECRET`,`AUTH0_CLIENT_ID` and `AUTH0_DOMAIN`.

For that, create a new file with the following code and save it as `.env` file in the directory and set the values like the following:

```
# .env file
AUTH0_CLIENT_SECRET=myCoolSecret
AUTH0_CLIENT_ID=myCoolClientId
AUTH0_DOMAIN=yourDomain.auth0.com
```

Once you've set those 4 enviroment variables, install the dependencies by running the following command:

```
composer install
```

Now you can use Apache or the built-in server:

```
php app/console server:run
```

Try calling [http://localhost:8000/](http://localhost:8000/) 

## What is Auth0?

Auth0 helps you to:

* Add authentication with [multiple authentication sources](https://docs.auth0.com/identityproviders), either social like **Google, Facebook, Microsoft Account, LinkedIn, GitHub, Twitter, Box, Salesforce, amont others**, or enterprise identity systems like **Windows Azure AD, Google Apps, Active Directory, ADFS or any SAML Identity Provider**.
* Add authentication through more traditional **[username/password databases](https://docs.auth0.com/mysql-connection-tutorial)**.
* Add support for **[linking different user accounts](https://docs.auth0.com/link-accounts)** with the same user.
* Support for generating signed [Json Web Tokens](https://docs.auth0.com/jwt) to call your APIs and **flow the user identity** securely.
* Analytics of how, when and where users are logging in.
* Pull data from other sources and add it to the user profile, through [JavaScript rules](https://docs.auth0.com/rules).

## Create a free account in Auth0

1. Go to [Auth0](https://auth0.com) and click Sign Up.
2. Use Google, GitHub or Microsoft Account to login.

## Author

[Auth0](auth0.com)

## License

This project is licensed under the MIT license. See the [LICENSE](LICENSE) file for more info.
