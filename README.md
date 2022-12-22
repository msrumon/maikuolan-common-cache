# Testing `Cache` of `maikuolan/common` library

[Caleb](https://www.facebook.com/caleb.mazalevskis) asked in a [post](https://www.facebook.com/groups/2204685680/posts/10162182426015681) that he is having trouble in testing something for his one of the common classes "`Cache`". This project is a testbed of his problem, sssembled using Docker.

## How To Run

First, install dependencies:

```bash
docker compose run --rm composer install
```

Then, start the server:

```bash
docker compose up --detach app
```

Now visit <http://localhost:8080>.

## How To Cleanup

Run:

```bash
docker compose down --rmi all
```
