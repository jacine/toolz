<?php

namespace Drupal\toolz;

use Drupal\Core\Site\Settings;

/**
 * Twig extension used by the themes.
 */
class TwigExtension extends \Twig_Extension {

  /**
   * {@inheritdoc}
   */
  public function getFunctions() {
    return [
      new \Twig_SimpleFunction('setting', array($this, 'getSetting'))
    ];
  }

  /**
   * Fetches a specific setting so you can use it in twig.
   */
  public function getSetting($setting_name) {
    return Settings::get($setting_name);
  }

}
