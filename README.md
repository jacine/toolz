# Toolz

My personal collection of common techniques I tend to employ when developing
Drupal 8 themes.

## Global Variables

This module alters default template variables to add the following:

- `current_path`
- `current_route`

## Local Development Setting to use `<style>` over `<link>`

A Development option to use `<link>` instead of `<style>` for CSS, so BrowserSync and friends will work. Use it for local development by adding the line below to `settings.local.php`:

```php
$settings['toolz_css_dev'] = TRUE;
```

## Twig Extension to Access Settings

A Twig extension to use `settings.php` defined `$settings` in Twig templates. Thanks @dawehner. Usage:

```twig
{% if setting('setting_name') %}
 {{ 'Hello!'|t }}
{% endif %}
```
