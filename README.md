# Stanford SearchStax (Proof of Concept)

This module provides a generic integration with the [drupal/searchstax](https://www.drupal.org/project/searchstax) module, allowing Drupal sites to connect to SearchStax and expose search functionality. The frontend output is intentionally minimal, so theming and styling can be handled by the site's theme.

## Features
- Generic SearchStax integration for Drupal.
- Configurable via the Drupal admin UI.
- Output is unstyled and can be themed as needed.
- Suitable for use on multiple sites.

## Requirements
- Drupal 10.0 or higher
- [drupal/searchstax](https://www.drupal.org/project/searchstax) module

## Installation
1. Place this module in your site's `modules/custom` directory (or equivalent).
2. Run `composer install` if using Composer for dependency management.
3. Enable the module via the Drupal admin UI or with Drush:
   ```bash
   drush en stanford_searchstax
   ```
4. Configure the module at `/admin/config/search/stanford-searchstax`.

## Theming
The module does not provide frontend styles. Use your Drupal theme to style the search form and results as needed. Template suggestions and theme hooks are provided for easy customization.

## Configuration
- Visit the settings page to configure SearchStax credentials and options.
- All configuration is exportable via Drupal's config system.

## Maintainers
- Stanford Web Services

## License
GPL-2.0-or-later
