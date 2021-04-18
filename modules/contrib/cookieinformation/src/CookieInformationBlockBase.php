<?php

namespace Drupal\cookieinformation;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;

/**
 * Provides a 'Cookieinformation Cookie Policy' Block.
 */
class CookieInformationBlockBase extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The config factory service.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * The cookieinformation language service
   *
   * @var \Drupal\cookieinformation\LanguageService
   */
  protected $languageService;

  /**
   * The cookieinformation visibility service
   *
   * @var \Drupal\cookieinformation\VisibilityService
   */
  protected $visibilityService;

  /**
   * {@inheritdoc}
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    ConfigFactoryInterface $config_factory,
    LanguageService $language_service,
    VisibilityService $visibility_service
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->setConfiguration($configuration);
  }

  /**
   * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   *
   * @return static
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('config.factory'),
      $container->get('cookieinformation.language_service'),
      $container->get('cookieinformation.visibility_service')
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    if (\Drupal::service('cookieinformation.visibility_service')->checkAll()) {
      return AccessResult::allowed();
    }
    else {
      return AccessResult::forbidden();
    }
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [];
  }

}
