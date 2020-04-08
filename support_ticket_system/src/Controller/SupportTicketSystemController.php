<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */
namespace Drupal\support_system\Controller;
class SupportTicketSystemController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Support Ticket System'),
    );
  }
}
