# === Stage 1: Node.js - Asset Build ===
FROM node:24.6.0-alpine3.22@sha256:51dbfc749ec3018c7d4bf8b9ee65299ff9a908e38918ce163b0acfcd5dd931d9 AS nodebuild
WORKDIR /app

# Nur package files für besseren Cache
COPY package.json package-lock.json ./
RUN npm install

# Restlicher Code & Build
COPY vite.config.js ./
COPY ./resources ./resources

RUN npm run build

FROM nginx:alpine3.22@sha256:42a516af16b852e33b7682d5ef8acbd5d13fe08fecadc7ed98605ba5e3b26ab8

WORKDIR /var/www/html/public

RUN rm -f index.html

COPY ./public/assets ./assets
COPY --from=nodebuild /app/public/build/assets ./build/assets
COPY ./public/favicon.ico .
COPY ./public/robots.txt .
COPY ./build/nginx/default.conf /etc/nginx/conf.d/default.conf

RUN  touch /var/run/nginx.pid && \
     chown -R nginx:nginx /var/cache/nginx /var/run/nginx.pid

USER nginx

EXPOSE 80