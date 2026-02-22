FROM php:8.4-fpm

WORKDIR /var/www/html
RUN apt-get update && apt-get install -y \
  git \
  unzip \
  curl \
  libzip-dev \
  libpng-dev \
  libjpeg-dev \
  libfreetype6-dev \
  libicu-dev \
  libonig-dev \
  libpq-dev \
  postgresql-client \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j$(nproc) \
  pdo \
  pdo_pgsql \
  zip \
  intl \
  gd \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*

# Node.js (for vite dev)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
  && apt-get install -y nodejs

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# Laravel permissions
RUN mkdir -p storage/logs bootstrap/cache \
  && chown -R www-data:www-data storage bootstrap/cache \
  && chmod -R 775 storage bootstrap/cache

USER www-data

