<?php

namespace Drupal\cookieinformation\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Configure Cookie Information settings.
 */
class CookieInformationSettingsForm extends ConfigFormBase {

  /**
   * The cookieinformation configuration.
   *
   * @var array
   *
   * @see \Drupal\Core\Config\Config
   */
  protected $config;

  /**
   * Constructs a CropWidgetForm object.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   */
  public function __construct(ConfigFactoryInterface $config_factory) {
    parent::__construct($config_factory);
    $this->config = $this->config('cookieinformation.settings');
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static (
      $container->get('config.factory')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'cookieinformationsettings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['cookieinformation.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['enable_popup'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable consent popup'),
      '#description' => $this->t('Check to enable the Cookie Information consent popup.'),
      '#default_value' => $this->config->get('enable_popup'),
    ];
    $form['enable_iab'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable IAB'),
      '#description' => $this->t('Check to enable the IAB (Interactive Advertising Bureau) feature in the Cookie Information consent popup. You will need to use the correct template for the IAB to work. You can switch to the IAB template within the platform.'),
      '#default_value' => $this->config->get('enable_iab'),
      '#states' => [
        'visible' => [
          ':checkbox[name="enable_popup"]' => ['checked' => TRUE],
        ],
      ],
    ];
    $form['visibility'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Cookie Information consent popup visibility'),
      '#states' => [
        'visible' => [
          ':checkbox[name="enable_popup"]' => ['checked' => TRUE],
        ],
      ],
    ];
    $form['visibility']['exclude_paths'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Exclude paths'),
      '#default_value' => !empty($this->config->get('exclude_paths')) ? $this->config->get('exclude_paths') : '',
      '#description' => $this->t("Specify pages by using their paths. Enter one path per line. The '*' character is a wildcard. Example paths are %blog for the blog page and %blog-wildcard for every personal blog. %front is the front page.", [
        '%blog' => '/blog',
        '%blog-wildcard' => '/blog/*',
        '%front' => '<front>',
      ]),
    ];
    $form['visibility']['exclude_admin'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Exclude admin pages'),
      '#description' => $this->t('Hide the Cookie Information consent popup on administration pages.'),
      '#default_value' => $this->config->get('exclude_admin'),
    ];
    $form['visibility']['exclude_uid_1'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Don’t show the Cookie Information consent popup for UID 1.'),
      '#description' => $this->t('Hide the Cookie Information consent popup for the user with UID 1.'),
      '#default_value' => $this->config->get('exclude_uid_1'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
    $this->config->set("enable_popup", $form_state->getValue('enable_popup'));
    $this->config->set("enable_iab", $form_state->getValue('enable_iab'));
    $this->config->set('exclude_paths', $form_state->getValue('exclude_paths'));
    $this->config->set('exclude_admin', $form_state->getValue('exclude_admin'));
    $this->config->set('exclude_uid_1', $form_state->getValue('exclude_uid_1'));
    $this->config->save();
  }

}
