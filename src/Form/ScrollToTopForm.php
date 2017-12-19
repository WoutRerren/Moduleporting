<?php

/**
* @file
* Contains Drupal\scroll_to_top\Form\ScrollToTopForm
*/

namespace Drupal\scroll_to_top\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ScrollToTopForm extends ConfigFormBase {
    
   /**
  * {@inheritdoc}
  */
  public function getFormId() {
    return 'scroll_to_top_form';
  }
}