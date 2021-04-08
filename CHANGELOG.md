# Release Notes for the Polyel Skeleton

## [v0.5.0 (2021-04-08)](https://github.com/Superbition/Polyel/releases/tag/v0.5.0)

### Added

- Updated the session configuration file to support the use of the new DB session driver
- Added new email configuration file to support the new email service from the framework
- There is a new email directory at `app/Email` where you store all reusable emails
- Added a new `main.php` configuration option `baseUrl`
- Because of the new email service from the framework, the skeleton now has full functionality for sending emails for
  verification and password resetting, check the `app/Email` directory

### Changed

- Inside the `session.php` configuration file, the prefix is now only used with the file driver because the
  database driver does not need it.

### Fixed

- Added missing error flash placeholder for the email verify view

## [v0.4.0 (2021-01-27)](https://github.com/Superbition/Polyel/releases/tag/v0.4.0)

### Added

- Added new `main.php` configuration option `autoGenerateComposerClassmap`, please see the configuration file
for more details or visit: https://polyel.io/docs/architectural_design/third-party-packages/
  
### Fixed

- Styling of previous changelog

## [v0.3.0 (2021-01-13)](https://github.com/Superbition/Polyel/releases/tag/v0.3.0)

### Added

- New default skeleton directories for application services: `app/services/` & `app/Services/Suppliers`
- New configuration element for application services in `main.php` under `servicesSuppliers`

## [v0.2.0 (2020-12-19)](https://github.com/Superbition/Polyel/releases/tag/v0.2.0)

### Added

- New config for XSRF Cookie inside of `session.php`, some options are shared by the session cookie itself
- Excluded the public directory from hot reload detection for the `hwatcher.sh`
- Ignore node modules directory inside of `.gitignore`

### Removed

- ExampleElement file has been removed because the `WelcomeHeader.php` acts as an example

## [v0.1.0 (2020-12-04)](https://github.com/Superbition/Polyel/releases/tag/v0.1.0)

- Initial release of the Polyel Framework Skeleton :rocket: