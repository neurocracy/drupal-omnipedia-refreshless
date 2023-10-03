This contains the source files for the "*Omnipedia - RefreshLess*" Drupal
module, which provides experimental support for the
[RefreshLess](https://www.drupal.org/project/refreshless) contributed module for
[Omnipedia](https://omnipedia.app/).

⚠️ ***[Why open source? / Spoiler warning](https://omnipedia.app/open-source)***

----

# Demo

[Rough demo video on YouTube](https://www.youtube.com/watch?v=UhcWpwI8X4Q) -
doesn't provide any UI to indicate loading yet so this is just a proof of
concept.

----

# Requirements

* [Drupal 9](https://www.drupal.org/download) ([Drupal 8 is end-of-life](https://www.drupal.org/psa-2021-11-30))

* PHP 8

* [Composer](https://getcomposer.org/)

----

Provides [an updated Drupal core
patch](https://www.drupal.org/project/refreshless/issues/3292843) and works
around several issues:

* [Add hook/event to alter cache contexts that RefreshLess considers sensitive to changes](https://www.drupal.org/project/refreshless/issues/3279949)

* [Consider attaching RefreshLess even when no session exists/user is anonymous](https://www.drupal.org/project/refreshless/issues/3279955)

* [Add attribute to empty regions for CSS](https://www.drupal.org/project/refreshless/issues/3293592)
