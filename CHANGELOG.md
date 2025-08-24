# Changelog

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
