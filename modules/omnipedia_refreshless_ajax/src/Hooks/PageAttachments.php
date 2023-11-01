<?php

declare(strict_types=1);

namespace Drupal\omnipedia_refreshless_ajax\Hooks;

use Drupal\hux\Attribute\Alter;

/**
 * Page attachments hook implementations.
 */
class PageAttachments {

  #[Alter('page_attachments')]
  /**
   * Attaches RefreshLess to the page.
   *
   * Unconditionally attaches the 'refreshless_ajax/refreshless' library as
   * there is a noticeable performance benefit to not having to initialize the
   * whole DOM and page even with the page cache active.
   *
   * @see \Drupal\refreshless_ajax\Hooks\PageAttachments::attach()
   *   Conditionally attaches the 'refreshless_ajax/refreshless' library only
   *   when a session is active.
   *
   * @see https://www.drupal.org/project/refreshless/issues/3279955
   *   Open issue to always attach the libray.
   *
   * @see \hook_page_attachments_alter()
   */
  public function attach(array &$attachments): void {

    $attachments['#attached']['library'][] = 'refreshless_ajax/refreshless';

  }

}
