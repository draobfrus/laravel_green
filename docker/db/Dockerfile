# MySQLのPHPの公式イメージを指定
# apt-get出来る様にdebian版を使う。
FROM mysql:5.7-debian

# コンテナ内で日本語が打てるようにlocalを変更、いらないファイル削除
RUN apt-get update \
    && apt-get install -y locales \
    && sed -i -E 's/# (ja_JP.UTF-8)/\1/' /etc/locale.gen \
    && locale-gen \
    && update-locale LANG=ja_JP.UTF-8 \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*
ENV LC_ALL ja_JP.UTF-8

# ローカルで作成したmy.confをDockerコンテナ内へコピー
COPY ./docker/db/my.conf /etc/my.conf
