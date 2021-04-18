<?php

namespace Drupal\cookieinformation\Plugin\Block;

use Drupal\cookieinformation\CookieInformationBlockBase;

/**
 * Provides a 'Cookieinformation Cookie Policy Block.
 *
 * @Block(
 *   id = "cookieinformation_cookie_policy_block",
 *   admin_label = @Translation("Cookieinformation Cookie Policy block"),
 *   category = @Translation("Cookieinformation"),
 * )
 */
class CookiePolicyBlock extends CookieInformationBlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $languageService = \Drupal::service('cookieinformation.language_service');
     return [
      '#markup' => '<script id="CookiePolicy" src="https://policy.app.cookieinformation.com/cid.js" data-culture="' . $languageService->getId() . '" type="text/javascript"></script>',
      '#allowed_tags' => [
        'script'
      ],
    ];
  }

}
