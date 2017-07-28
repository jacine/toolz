# Toolz

My personal collection of common techniques I tend to employ when developing
Drupal 8 themes.

## Global Variables

This module alters default template variables to add the following:

- `current_path`
- `current_route`

## Local Development Setting to use `<link>` over `<style>`

A Development option to use `<link>` instead of `<style>` for CSS, so BrowserSync and friends will work. Use it for local development by adding the line below to `settings.local.php`:

```php
$settings['toolz_css_dev'] = TRUE;
```

## Better Template Suggestions for Container Hook

Dealing with the `container.html.twig` template is a pain, because it lacks context. This module adds additional theme hook suggestions where possible to make theming easier.
