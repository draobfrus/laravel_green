## LEMP 環境構築 備忘録

### 使用技術

- PHP 8
- Laravel 8
- Nginx 1.24.0
- MySQL 8
- Docker docker-compose 2.13.0

### 構築手順

1. このリポジトリをクローンしてください。

```
git clone git@github.com:draobfrus/docker_laravel.git
```

2. コンテナを起動してください。

```
docker compose up -d
```

3. app コンテナに入ってください。

```
docker compose exec app bash
```

4. app コンテナに入った状態で、Laravel プロジェクトを立ち上げてください。

```
composer create-project --prefer-dist "laravel/laravel=8.*" .
```
