FROM dunglas/frankenphp:latest

WORKDIR /var/www/html

RUN install-php-extensions \
  pdo \
  pdo_mysql \
  zip \
  intl \
  gd \
  exif \
  pcntl \
  bcmath \
  mbstring \
  sockets

RUN apt-get update && apt-get install -y \
  git \
  unzip \
  curl \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*

RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
  && apt-get install -y nodejs

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN mkdir -p storage/logs bootstrap/cache /data/caddy /config \
  && chown -R www-data:www-data storage bootstrap/cache /data/caddy /config \
  && chmod -R 775 storage bootstrap/cache /data/caddy /config

USER www-data
