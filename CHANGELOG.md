# Changelog

## [1.7.13](https://github.com/steven-streller/master-laravel/compare/v1.7.12...v1.7.13) (2025-08-25)


### Bug Fixes

* consolidate COPY commands in Dockerfile for improved clarity ([f35735a](https://github.com/steven-streller/master-laravel/commit/f35735acccb2de420924606ec939df1927317030))

## [1.7.12](https://github.com/steven-streller/master-laravel/compare/v1.7.11...v1.7.12) (2025-08-25)


### Bug Fixes

* streamline Dockerfile by adjusting WORKDIR and simplifying asset copy commands ([2bb6ae6](https://github.com/steven-streller/master-laravel/commit/2bb6ae656d520a543f554e82e079a7e43fe9ab0f))

## [1.7.11](https://github.com/steven-streller/master-laravel/compare/v1.7.10...v1.7.11) (2025-08-25)


### Bug Fixes

* update runner version to ubuntu-24.04 in release workflow ([54a4bd4](https://github.com/steven-streller/master-laravel/commit/54a4bd444e8de0c9b3bbc36a410c662dec0974e6))

## [1.7.10](https://github.com/steven-streller/master-laravel/compare/v1.7.9...v1.7.10) (2025-08-25)


### Bug Fixes

* correct image configuration in migrate job ([a038860](https://github.com/steven-streller/master-laravel/commit/a03886089e2369363ef87c0b2b428d02b4a209ae))

## [1.7.9](https://github.com/steven-streller/master-laravel/compare/v1.7.8...v1.7.9) (2025-08-25)


### Bug Fixes

* remove image digest from migrate job configuration ([73c2756](https://github.com/steven-streller/master-laravel/commit/73c275651c149d13f969ad6cb96dc964cc4d065d))

## [1.7.8](https://github.com/steven-streller/master-laravel/compare/v1.7.7...v1.7.8) (2025-08-25)


### Bug Fixes

* update Docker image tagging to include version without 'v' prefix ([8e79df9](https://github.com/steven-streller/master-laravel/commit/8e79df925ed32e40e796ece36765a0e61f42c1ce))
* update image tags to include 'v' prefix in values.yaml ([2b34364](https://github.com/steven-streller/master-laravel/commit/2b34364b46f926dd33310d05c745a86f8e78cdcf))

## [1.7.7](https://github.com/steven-streller/master-laravel/compare/v1.7.6...v1.7.7) (2025-08-25)


### Miscellaneous Chores

* trigger release ([1b170ee](https://github.com/steven-streller/master-laravel/commit/1b170ee9a1cd5343e023c2c38233794afdd148dd))

## [1.7.6](https://github.com/steven-streller/master-laravel/compare/v1.7.5...v1.7.6) (2025-08-25)


### Bug Fixes

* add 'v' prefix to image tag in values.yaml for app and nginx ([319612e](https://github.com/steven-streller/master-laravel/commit/319612e6d79fddc8ecea8740f126a181ee8dfc9c))

## [1.7.5](https://github.com/steven-streller/master-laravel/compare/v1.7.4...v1.7.5) (2025-08-25)


### Bug Fixes

* correct image tag format in values.yaml to include 'v' prefix ([26ef351](https://github.com/steven-streller/master-laravel/commit/26ef3511e8cfbe61b2ab9c25bb5556dc62af2de7))
* update CI workflow to trigger on release and adjust image tag options in release-please config ([c18caed](https://github.com/steven-streller/master-laravel/commit/c18caed4744c7cc099da3cf56126fce62c892ba9))

## [1.7.4](https://github.com/steven-streller/master-laravel/compare/v1.7.3...v1.7.4) (2025-08-25)


### Bug Fixes

* add 'replace-with-tag' option for app and nginx image tags in release-please config ([2d7ae59](https://github.com/steven-streller/master-laravel/commit/2d7ae5995aff822b017f5df090bf53c162641287))

## [1.7.3](https://github.com/steven-streller/master-laravel/compare/v1.7.2...v1.7.3) (2025-08-25)


### Bug Fixes

* add missing jsonpath entries for app and nginx image tags in release-please config ([7e36e20](https://github.com/steven-streller/master-laravel/commit/7e36e2092b311d683c9dfe57585dcc1b46ca2916))
* remove image digest from app and nginx deployment configurations ([08dcf4c](https://github.com/steven-streller/master-laravel/commit/08dcf4c34e924e1c49f91ab8a0c9fe7c90b1acaf))

## [1.7.2](https://github.com/steven-streller/master-laravel/compare/v1.7.1...v1.7.2) (2025-08-25)


### Bug Fixes

* add missing entry for version extraction in release-please config ([0d350d1](https://github.com/steven-streller/master-laravel/commit/0d350d1c50fc59e281897001620c224813c5a0e6))

## [1.7.1](https://github.com/steven-streller/master-laravel/compare/v1.7.0...v1.7.1) (2025-08-25)


### Miscellaneous Chores

* trigger release ([efeb7e0](https://github.com/steven-streller/master-laravel/commit/efeb7e063b5e4a2e43ff55bdf540e055788bb4fe))

## [1.7.0](https://github.com/steven-streller/master-laravel/compare/v1.6.0...v1.7.0) (2025-08-25)


### Features

* add CI workflow for building and pushing Helm charts ([2ccf068](https://github.com/steven-streller/master-laravel/commit/2ccf068d14e166a67a8f720b2f46b9748f8b7d6c))

## [1.6.0](https://github.com/steven-streller/master-laravel/compare/v1.5.0...v1.6.0) (2025-08-25)


### Features

* add docker-compose configuration for master-laravel services ([109265e](https://github.com/steven-streller/master-laravel/commit/109265ecabb3bbc7fe943a0a23a1758b20a7902f))


### Bug Fixes

* remove helm/master-laravel version from release-please manifest ([ca6471e](https://github.com/steven-streller/master-laravel/commit/ca6471e10e78ecfdda1f70bf55b00f6ef981e244))


### Miscellaneous Chores

* **main:** release 1.5.1 ([9dcfd4c](https://github.com/steven-streller/master-laravel/commit/9dcfd4cada2557f36e503692477d9e53bea12de0))
* **main:** release 1.5.1 ([795327d](https://github.com/steven-streller/master-laravel/commit/795327de7c0cbba741801ba5ebe80ff4e6b52d8d))

## [1.5.0](https://github.com/steven-streller/master-laravel/compare/v1.4.0...v1.5.0) (2025-08-25)


### Features

* enhance release-please configuration to include extra-files for helm package ([0caba6a](https://github.com/steven-streller/master-laravel/commit/0caba6ace74649e5efcd851148f32d87746a65fa))
* update release-please configuration for helm/master-laravel package ([ebaf8d1](https://github.com/steven-streller/master-laravel/commit/ebaf8d1e992f4cd0ad9e2b653d78c105bbaaafbd))


### Bug Fixes

* update release-please configuration to correct helm package path ([16aa2f7](https://github.com/steven-streller/master-laravel/commit/16aa2f758cee16d5c7f8f1c8d5179a416aa8a82f))

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
