# Auth0 + Symfony Seed
<img src="https://img.shields.io/badge/community-driven-brightgreen.svg"/> <br>

This is the seed project you need to use if you're going to create a Symfony app that will use Auth0.

This repo is supported and maintained by Community Developers, not Auth0. For more information about different support levels check https://auth0.com/docs/support/matrix .

## Getting started

### Installation

#### Running the example

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


#### Running the example with docker

In order to run the example with docker you need to have `docker` installed.

You also need to set the environment variables as explained [previously](#running-the-example).

Execute in command line `sh exec.sh` to run the Docker in Linux, or `.\exec.ps1` to run the Docker in Windows.


## Contribute

Feel like contributing to this repo? We're glad to hear that! Before you start contributing please visit our [Contributing Guideline](https://github.com/auth0-community/getting-started/blob/master/CONTRIBUTION.md).

Here you can also find the [PR template](https://github.com/auth0-community/auth0-symfony-php-web-app/blob/master/PULL_REQUEST_TEMPLATE.md) to fill once creating a PR. It will automatically appear once you open a pull request.

## Issues Reporting

Spotted a bug or any other kind of issue? We're just humans and we're always waiting for constructive feedback! Check our section on how to [report issues](https://github.com/auth0-community/getting-started/blob/master/CONTRIBUTION.md#issues)!

Here you can also find the [Issue template](https://github.com/auth0-community/auth0-symfony-php-web-app/blob/master/ISSUE_TEMPLATE.md) to fill once opening a new issue. It will automatically appear once you create an issue.

## Repo Community

Feel like PRs and issues are not enough? Want to dive into further discussion about the tool? We created topics for each Auth0 Community repo so that you can join discussion on stack available on our repos. Here it is for this one: [auth0-symfony-php-web-app](https://community.auth0.com/t/auth0-community-oss-auth0-symfony-php-web-app/15976)

<a href="https://community.auth0.com/">
<img src="/Assets/join_auth0_community_badge.png"/>
</a>

## License

This project is licensed under the MIT license. See the [LICENSE](https://github.com/auth0-community/auth0-symfony-php-web-app/blob/master/LICENSE.md) file for more info.

## What is Auth0?

Auth0 helps you to:

* Add authentication with [multiple authentication sources](https://docs.auth0.com/identityproviders), either social like
* Google
* Facebook
* Microsoft
* Linkedin
* GitHub
* Twitter
* Box
* Salesforce
* etc.

**or** enterprise identity systems like:
* Windows Azure AD
* Google Apps
* Active Directory
* ADFS
* Any SAML Identity Provider

* Add authentication through more traditional [username/password databases](https://docs.auth0.com/mysql-connection-tutorial)
* Add support for [linking different user accounts](https://docs.auth0.com/link-accounts) with the same user
* Support for generating signed [JSON Web Tokens](https://docs.auth0.com/jwt) to call your APIs and create user identity flow securely
* Analytics of how, when and where users are logging in
* Pull data from other sources and add it to user profile, through [JavaScript rules](https://docs.auth0.com/rules)

## Create a free Auth0 account

* Go to [Auth0 website](https://auth0.com/signup)
* Hit the **SIGN UP** button in the upper-right corner
