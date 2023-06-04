# nginxのPHPの公式イメージを指定（alpineは軽量）
FROM nginx:1.19-alpine

# コンテナのタイムゾーンを指定
ENV TZ Asia/Tokyo

# ローカルで作成したdefault.confをDockerコンテナ内へコピー
COPY ./docker/web/default.conf /etc/nginx/conf.d/default.conf
