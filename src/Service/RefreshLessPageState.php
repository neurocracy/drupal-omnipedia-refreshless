<?php

declare(strict_types=1);

namespace Drupal\omnipedia_refreshless\Service;

use Drupal\Core\Access\CsrfTokenGenerator;
use Drupal\Core\Cache\Context\CacheContextsManager;
use Drupal\refreshless\RefreshlessPageState as RefreshLessPageStateBase;

/**
 * RefreshLess page state decorated service.
 *
 * @see https://www.drupal.org/docs/drupal-apis/services-and-dependency-injection/altering-existing-services-providing-dynamic
 *
 * @see \Drupal\refreshless\RefreshlessPageState
 *   Service that we decorate.
 */
class RefreshLessPageState extends RefreshLessPageStateBase {

  /**
   * The RefreshLess page state service that we decorate.
   *
   * @var \Drupal\refreshless\RefreshlessPageState
   */
  protected RefreshLessPageStateBase $refreshlessPageState;

  /**
   * Omnipedia cache contexts to be considered relevant to RefreshLess.
   *
   * @var string[]
   */
  protected array $omnipediaCacheContexts = [
    'omnipedia_dates',
    'omnipedia_wiki_node',
    'omnipedia_is_wiki_main_page',
    'omnipedia_is_wiki_search_page',
  ];

  /**
   * Service constructor; saves dependencies.
   *
   * @param \Drupal\Core\Cache\Context\CacheContextsManager $cacheContextsManager
   *   The Drupal cache contexts manager.
   *
   * @param \Drupal\Core\Access\CsrfTokenGenerator $csrfTokenGenerator
   *   The Drupal CSRF token generator.
   *
   * @param \Drupal\refreshless\RefreshlessPageState $refreshlessPageState
   *   The RefreshLess page state service that we decorate.
   */
  public function __construct(
    CacheContextsManager      $cacheContextsManager,
    CsrfTokenGenerator        $csrfTokenGenerator,
    RefreshLessPageStateBase  $refreshlessPageState
  ) {

    parent::__construct($cacheContextsManager, $csrfTokenGenerator);

    $this->refreshlessPageState = $refreshlessPageState;

  }

  /**
   * Indicates whether Refreshless is sensitive to changes in a cache context.
   *
   * This considers Omnipedia cache contexts in addition to the parent method's
   * checks.
   *
   * @param string $contextToken
   *   The cache context token to check.
   *
   * @return boolean
   *   Whether the given cache context token is sensitive for RefreshLess.
   */
  protected function isSensitiveContext($contextToken) {

    assert('is_string($contextToken)');

    return
      \in_array($contextToken, $this->omnipediaCacheContexts) ||
      parent::isSensitiveContext($contextToken);

  }

}
