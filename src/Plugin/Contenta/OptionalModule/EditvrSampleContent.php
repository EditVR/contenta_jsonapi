<?php

namespace Drupal\contenta_jsonapi\Plugin\Contenta\OptionalModule;

use Drupal\Core\Form\FormStateInterface;

/**
 * EditVR Sample Content.
 *
 * @ContentaOptionalModule(
 *   id = "editvr_sample_content",
 *   label = @Translation("EditVR Sample Content"),
 *   description = @Translation("The EditVR Sample Content module adds demo content to the model packaged with EditVR."),
 *   type = "module",
 *   weight = 10,
 *   standardlyEnabled = true,
 * )
 */
class EditvrSampleContent extends AbstractOptionalModule {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form = parent::buildForm($form, $form_state);

    $form['editvr_sample_content']['project_info'] = [
      '#type' => 'item',
      '#description' => $this->t("Installing the EditVR Sample Content will create an example experience with
        multiple scenes, components, and related media assets. You can uninstall this module and remove this content
        at any time."),
    ];

    return $form;
  }

}
