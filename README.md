# Dash Wordpress Theme

This theme is built with the [Fabrica Dev Kit](https://github.com/fabrica-wp/fabrica-dev-kit).

## Requirements
* Docker
* Docker-compose
* Gulp-cli (global installation with `npm i -g gulp-cli` or `yarn global add gulp-cli`)

## Installation

1. Install Fabrica Dev Kit
2. Copy this `setup.yml` to the project root, making whatever changes you like
3. Run `setup.rb`. This will build a Docker container for a local Wordpress installation.

After installation, replace the contents of `dev/` with this repo's contents:

```
git init .
git remote add -t \* -f origin <this-repository-url>
git fetch --all
git reset --hard origin/master
```

## Development

1. From `dev` directory, run: `docker-compose up -d` to start the docker container.
2. Run `gulp` to build the theme and start BrowserSync.
3. Launch the site using the URL shown in the console, probably http://localhost:3000/.
4. To shut down Docker: `docker-compose down` from `dev` directory.

## Reference Links

Timber Documentation for Twig templates: http://timber.github.io/timber/#timber-post
