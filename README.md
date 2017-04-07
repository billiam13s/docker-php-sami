# Sami on docker

Generate and serve PHP API documentation.

## Usages

### Pull image

```
$ docker pull billiam13s/php-sami
```

### Run container

```
$ docker run --rm -it -p 80:80 -v $(pwd):/var/local/src billiam13s/php-sami
```

### Mount source codes

Mount php source codes into `/var/local/src` directory.

```
$ docker run -v <path-to-source-code>:/var/local/src billiam13s/php-sami
```

### Customized sami configuration

Override default configuration. Create `sami.php` and mount it into `/var/local/sami.php`. [Sami configuration documentation](https://github.com/FriendsOfPHP/Sami#configuration).

```
$ docker run -v <path-to-source-code>::/var/local/src -v <path-to-sami-config>/sami.php:/var/local/sami.php billiam13s/php-sami
```
