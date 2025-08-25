# Changelog

## [1.4.0](https://github.com/steven-streller/master-laravel/compare/v1.3.0...v1.4.0) (2025-08-25)


### Features

* add helm/master-laravel package to release-please configuration and manifest ([98ef298](https://github.com/steven-streller/master-laravel/commit/98ef2989e11bdb52b46e3211738913e8f31b56f8))
* add master-laravel Helm chart with application, Nginx, and MySQL configurations ([1958e31](https://github.com/steven-streller/master-laravel/commit/1958e31830a7c50c711dd6d982935d9be9502294))

## [1.3.0](https://github.com/steven-streller/master-laravel/compare/v1.2.1...v1.3.0) (2025-08-25)


### Features

* add release-please configuration for versioning management ([d1a87e4](https://github.com/steven-streller/master-laravel/commit/d1a87e410e4973bf5833c7806ad49afbf4427167))
* add release-please manifest file for versioning management ([9ba066e](https://github.com/steven-streller/master-laravel/commit/9ba066e9fe239d8d209273df31a4afc98b8f98b4))
* remove obsolete release-please configuration and update manifest version ([2e3c5a2](https://github.com/steven-streller/master-laravel/commit/2e3c5a240bdfc4d6392da0a9548e7569233aae67))
* simplify release-please configuration by removing unnecessary fields ([8bf8c65](https://github.com/steven-streller/master-laravel/commit/8bf8c65cf50c3192335a511939204424c56949bc))
* update release-please configuration and add missing config file ([91b660b](https://github.com/steven-streller/master-laravel/commit/91b660b63bf7e40b2dddc9580be4f747c47b1854))


### Bug Fixes

* update config-file path in release-please workflow ([3fb3a01](https://github.com/steven-streller/master-laravel/commit/3fb3a010b5c110feb2e7fac3d50b44ba1185606b))
* update version in release-please manifest to 1.2.1 ([435078b](https://github.com/steven-streller/master-laravel/commit/435078b8cab54e19315afb75c4312c8dad0f71ef))

## [1.2.1](https://github.com/steven-streller/master-laravel/compare/v1.2.0...v1.2.1) (2025-08-24)


### Bug Fixes

* update Dockerfile to specify correct path for www.conf and enhance NGINX timeout settings ([f8793b1](https://github.com/steven-streller/master-laravel/commit/f8793b154023e10c9fd9bf61e364d20252967fe5))

## [1.2.0](https://github.com/steven-streller/master-laravel/compare/v1.1.2...v1.2.0) (2025-08-24)


### Features

* add FPM pool configuration for PHP in Dockerfile ([e91b73e](https://github.com/steven-streller/master-laravel/commit/e91b73e4cdd17536c3e1cedbb6a1a3902bb73084))

## [1.1.2](https://github.com/steven-streller/master-laravel/compare/v1.1.1...v1.1.2) (2025-08-24)


### Bug Fixes

* include composer.json in Dockerfile to ensure dependencies are correctly managed ([cfff932](https://github.com/steven-streller/master-laravel/commit/cfff93249db110c65241b4fd67f68f6c58b88250))

## [1.1.1](https://github.com/steven-streller/master-laravel/compare/v1.1.0...v1.1.1) (2025-08-24)


### Bug Fixes

* correct session directory name in Dockerfile and update default log channel to stderr ([4565c9e](https://github.com/steven-streller/master-laravel/commit/4565c9ec74dbe7c8615741e33cbcbe9e11c00de4))

## [1.1.0](https://github.com/steven-streller/master-laravel/compare/v1.0.2...v1.1.0) (2025-08-24)


### Features

* add health check endpoints for service status monitoring ([fd394e3](https://github.com/steven-streller/master-laravel/commit/fd394e32f99a0f36388c802476a1a5f60881f84d))


### Bug Fixes

* add permissions for contents in CI workflow ([4ab39cc](https://github.com/steven-streller/master-laravel/commit/4ab39cc7725b90da96e42b442b884c02af07479c))
* remove unnecessary whitespace in /readyz route ([df0ec0b](https://github.com/steven-streller/master-laravel/commit/df0ec0ba449b3c6895097b8f330af6f89b7c9ac1))

## [1.0.2](https://github.com/steven-streller/master-laravel/compare/v1.0.1...v1.0.2) (2025-08-24)


### Bug Fixes

* update fastcgi_pass to use master-laravel-app for PHP processing ([e64d4ef](https://github.com/steven-streller/master-laravel/commit/e64d4ef9ff8d4e953dd3d63ca9037645209a7c89))

## [1.0.1](https://github.com/steven-streller/master-laravel/compare/v1.0.0...v1.0.1) (2025-08-24)


### Miscellaneous Chores

* clean up CHANGELOG by removing outdated entries and updating PHP requirement to ^8.4 ([9d9a25d](https://github.com/steven-streller/master-laravel/commit/9d9a25d066c52368aa5e3820dba65c9f8e1c10de))

## 1.0.0 (2025-08-24)


### Miscellaneous Chores

* **ci:** Update PHP version matrix to only include 8.4 ([167dec4](https://github.com/steven-streller/master-laravel/commit/167dec42e81947f287fb31938ce83fa05d1c2fbd))
* **dependabot:** Update Dependabot configuration to specify docker directories for nginx and app ([2b6bc84](https://github.com/steven-streller/master-laravel/commit/2b6bc845c6ba534b02288ca04ae651c80767079b))
* update PHP requirement from ^8.2 to ^8.4 ([8edd4af](https://github.com/steven-streller/master-laravel/commit/8edd4af1923a64732781e76e8b5143731b7914d4))
