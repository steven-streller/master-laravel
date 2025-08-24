# Laravel DevOps Prototype

This repository contains the prototype for my master's thesis, evaluating how well Laravel—a traditionally monolithic PHP framework can be integrated with modern DevOps and DevSecOps practices.

## Background & Motivation

- DevOps is essential for efficient, high-quality, and automated software delivery.
- Laravel is widely used for complex web applications but is often structured as a monolith.
- Integrating DevOps principles (automation, containerization, security) with Laravel is challenging and not always standard practice.
- This project explores the opportunities and challenges of applying DevOps and DevSecOps methods to Laravel projects.

## Problem Statement

- Laravel apps are rarely designed for modern deployment strategies like CI/CD or Kubernetes.
- Security aspects such as secrets management, hardened pipelines, and container security are often neglected.
- There is a lack of systematic best practices for Dev(Sec)Ops in the Laravel ecosystem.

## Project Goals

- Demonstrate that Laravel can be adapted for modern Dev(Sec)Ops environments despite its monolithic roots.
- Show, using a DLRG use case, how Laravel apps can be containerized and integrated into a production-like Kubernetes setup with CI, CD, IaC, and security mechanisms.
- Identify challenges and practical solutions for CI/CD, containerization, and security in Laravel projects.
- Provide actionable recommendations and best practices for Laravel developers

## Architecture Overview

This prototype uses a **multi-container architecture** to separate concerns and enable DevOps best practices:

- **app**: Runs the Laravel PHP application with PHP-FPM. Handles all backend logic and serves dynamic content.
- **nginx**: Acts as a reverse proxy and static file server. Forwards PHP requests to the `app` container and serves assets directly.
- **mysql**: Provides the relational database backend for Laravel.

All containers communicate via a Docker network. This setup allows for independent scaling, easier updates, and clear separation of responsibilities—making it suitable for CI/CD, container security scanning, and production

# Getting Started

To run this prototype locally with Docker Compose, use the following setup:

```yaml
services:
  app:
    image: ghcr.io/steven-streller/master-laravel-app:v1.0.0
    restart: unless-stopped
    volumes:
      - .env:/var/www/html/.env
    expose:
      - 9000
    depends_on:
      - mysql
  nginx:
    image: ghcr.io/steven-streller/master-laravel-nginx:v1.0.0
    ports:
      - "80:80"
    depends_on:
      - app
  mysql:
    image: mysql:9.4.0
    container_name: mysql
    restart: unless-stopped
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: laravel
      MYSQL_USER: user
      MYSQL_PASSWORD: password
    volumes:
      - ./mysql:/var/lib/mysql
    expose:
      - 3306
```

## Setup steps:

1. Copy `.env.example` to `.env` and adjust the following values if needed:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=user
    DB_PASSWORD=password
    ```
2. Start all services:
    ```sh
    docker compose up
    ```
3. Generate the Laravel application key:
    ```sh
    docker compose exec app php artisan key:generate
    ```
4. Run the database migrations:
    ```sh
    docker compose exec app php artisan migrate
    ```
5. Access the application at [http://localhost](http://localhost).

Now your Laravel application is ready!