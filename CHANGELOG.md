# Changelog

## 1.0.0 (2025-08-24)


### Miscellaneous Chores

* **ci:** Update PHP version matrix to only include 8.4 ([167dec4](https://github.com/steven-streller/master-laravel/commit/167dec42e81947f287fb31938ce83fa05d1c2fbd))
* **dependabot:** Update Dependabot configuration to specify docker directories for nginx and app ([2b6bc84](https://github.com/steven-streller/master-laravel/commit/2b6bc845c6ba534b02288ca04ae651c80767079b))
* update PHP requirement from ^8.2 to ^8.4 ([8edd4af](https://github.com/steven-streller/master-laravel/commit/8edd4af1923a64732781e76e8b5143731b7914d4))

## [1.0.1](https://github.com/steven-streller/master-laravel/compare/v1.0.0...v1.0.1) (2025-08-24)


### Miscellaneous Chores

* **ci:** update image matrix to only include nginx ([88be190](https://github.com/steven-streller/master-laravel/commit/88be190c595c0c4f099dfa0a3c4c05fd26913b6c))

## 1.0.0 (2025-08-24)


### Bug Fixes

* update Dockerfile linting steps for app and nginx ([fa929e7](https://github.com/steven-streller/master-laravel/commit/fa929e7ec73c684333f172cfe5a28311dd9a21c9))

## [1.6.3](https://github.com/steven-streller/master-laravel/compare/v1.6.2...v1.6.3) (2025-08-24)


### Bug Fixes

* **docker:** update image names from 'php' to 'app' in CI workflow and README; add Dockerfile for app build ([82571f1](https://github.com/steven-streller/master-laravel/commit/82571f117cffff61b817c76a179845f15ab8cb54))

## [1.6.2](https://github.com/steven-streller/master-laravel/compare/v1.6.1...v1.6.2) (2025-08-24)


### Bug Fixes

* **docs:** update setup instructions for Docker Compose and add key generation and migration steps ([d580210](https://github.com/steven-streller/master-laravel/commit/d5802109e9733b38b5bba29db3aae3baed31a359))

## [1.6.1](https://github.com/steven-streller/master-laravel/compare/v1.6.0...v1.6.1) (2025-08-24)


### Bug Fixes

* **nginx:** update fastcgi_pass to use 'app' container name for PHP-FPM ([34ac9b0](https://github.com/steven-streller/master-laravel/commit/34ac9b0f397e7cfd27d218ac417911255e98cb88))

## [1.6.0](https://github.com/steven-streller/master-laravel/compare/v1.5.0...v1.6.0) (2025-08-24)


### Features

* **assets:** add favicon image to enhance branding ([ac2ae66](https://github.com/steven-streller/master-laravel/commit/ac2ae661809d734ca160a5146303efda56003aca))


### Bug Fixes

* **ci:** correct indentation for job name and runs-on in CI workflow ([9e1ba3f](https://github.com/steven-streller/master-laravel/commit/9e1ba3f578d66a1b73945f3313a2fb42ccb9dbff))

## [1.5.0](https://github.com/steven-streller/master-laravel/compare/v1.4.0...v1.5.0) (2025-08-24)


### Features

* **ci:** add multi-stage Dockerfile and NGINX configuration for improved image building ([1ee275f](https://github.com/steven-streller/master-laravel/commit/1ee275fbe60525df984914df01a9922e518a80f2))

## [1.4.0](https://github.com/steven-streller/master-laravel/compare/v1.3.3...v1.4.0) (2025-08-24)


### Features

* **ci:** add Dockerfile for multi-stage build and update image build command ([18802c0](https://github.com/steven-streller/master-laravel/commit/18802c0d81aa4a33fb37622c186520400ed11c03))


### Bug Fixes

* **ci:** update Dockerfile linting step to specify correct path ([2c4084b](https://github.com/steven-streller/master-laravel/commit/2c4084bfe62b17573703eedb0b856cc36acee6e7))


### Miscellaneous Chores

* **ci:** remove obsolete Dockerfile ([196e79f](https://github.com/steven-streller/master-laravel/commit/196e79f7c28bd716efc0921470fc4046163db50f))

## [1.3.3](https://github.com/steven-streller/master-laravel/compare/v1.3.2...v1.3.3) (2025-08-23)


### Bug Fixes

* **ci:** remove unused SBOM output file and parameter ([66ec76e](https://github.com/steven-streller/master-laravel/commit/66ec76ee9f21ff53b3c70e2b0ed63edc8933ba06))

## [1.3.2](https://github.com/steven-streller/master-laravel/compare/v1.3.1...v1.3.2) (2025-08-23)


### Bug Fixes

* **ci:** add SBOM generation and upload steps to workflow ([badb34a](https://github.com/steven-streller/master-laravel/commit/badb34a8ebd3006b69c2fc0edb170c3701a4a8ae))

## [1.3.1](https://github.com/steven-streller/master-laravel/compare/v1.3.0...v1.3.1) (2025-08-23)


### Bug Fixes

* **ci:** update permissions and remove SBOM upload step ([4b85fad](https://github.com/steven-streller/master-laravel/commit/4b85fad4f799705980d0ac74c1184442cfdde8eb))

## [1.3.0](https://github.com/steven-streller/master-laravel/compare/v1.2.3...v1.3.0) (2025-08-23)


### Features

* **ci:** add SBOM generation and upload steps to workflow ([e2b778a](https://github.com/steven-streller/master-laravel/commit/e2b778a500330233e83d1285c49bbde291ec8282))

## [1.2.3](https://github.com/steven-streller/master-laravel/compare/v1.2.2...v1.2.3) (2025-08-23)


### Bug Fixes

* **ci:** update token to use RELEASE_PLEASE_TOKEN for release process ([460cb83](https://github.com/steven-streller/master-laravel/commit/460cb83e9b02ae2a0c8d9374840f854bd3fe5cd3))

## [1.2.2](https://github.com/steven-streller/master-laravel/compare/v1.2.1...v1.2.2) (2025-08-23)


### Bug Fixes

* **ci:** remove unused push trigger and streamline Docker image tagging ([9954181](https://github.com/steven-streller/master-laravel/commit/995418128c7ca5096cccf605e054e76fb738495a))

## [1.2.1](https://github.com/steven-streller/master-laravel/compare/v1.2.0...v1.2.1) (2025-08-23)


### Bug Fixes

* **ci:** ensure correct tagging and pushing of Docker images for releases ([4ad03d9](https://github.com/steven-streller/master-laravel/commit/4ad03d93cb0103aa4d1039aaec77192118dec2bd))

## [1.2.0](https://github.com/steven-streller/master-laravel/compare/v1.1.1...v1.2.0) (2025-08-23)


### Features

* **ci:** add CI workflow for building, scanning, and signing Docker images ([19205b5](https://github.com/steven-streller/master-laravel/commit/19205b50a980b778971bb6eb157511922bb15e80))
* **ci:** add id-token permission for CI workflow ([1cd37a5](https://github.com/steven-streller/master-laravel/commit/1cd37a5ac870a9556b2702bcf67118a916af185e))
* **ci:** add vulnerability scan step using Trivy ([20fe4b3](https://github.com/steven-streller/master-laravel/commit/20fe4b3a394e8b079284e983bec99f1a8766e920))
* **ci:** retrieve and use image digest for signing Docker image ([9d9fb8d](https://github.com/steven-streller/master-laravel/commit/9d9fb8d44038aee3afc8e1aa42f288d0cf931580))
* **ci:** update job name for clarity in CI workflow ([ec1c8a5](https://github.com/steven-streller/master-laravel/commit/ec1c8a56b6b8f5c3c9462f4847ffaadacc80f9ed))
* **ci:** update permissions for CI workflow ([fd568ef](https://github.com/steven-streller/master-laravel/commit/fd568ef774416d83c88eaaae7764be63ed6567d3))

## [1.1.1](https://github.com/steven-streller/master-laravel/compare/v1.1.0...v1.1.1) (2025-08-23)


### Bug Fixes

* **ci:** update package name in composer.json and release-please.yaml ([e394a11](https://github.com/steven-streller/master-laravel/commit/e394a11587468b9538028454d79f3a56346ce4fc))

## [1.1.0](https://github.com/steven-streller/master-laravel/compare/v1.0.0...v1.1.0) (2025-08-23)


### Features

* trigger release ([87e4f40](https://github.com/steven-streller/master-laravel/commit/87e4f4066b1f72ec1e2f587cca978e46ed79fc41))
