<?php
/**
 * @file
 * Contains \Drupal\support_ticket_system\Controller\SupportTicketSystemController.
 */
namespace Drupal\support_ticket_system\Controller;
class SupportTicketSystemController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Support Ticket System'),
    );
  }
}
