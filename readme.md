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

# Installation

## Composer

### Set up

Ensure that you have your Drupal installation set up with the correct Composer
installer types such as those provided by [the `drupal/recommended-project`
template](https://www.drupal.org/docs/develop/using-composer/starting-a-site-using-drupal-composer-project-templates#s-drupalrecommended-project).
If you're starting from scratch, simply requiring that template and following
[the Drupal.org Composer
documentation](https://www.drupal.org/docs/develop/using-composer/starting-a-site-using-drupal-composer-project-templates)
should get you up and running.

### Repository

In your root `composer.json`, add the following to the `"repositories"` section:

```json
"drupal/omnipedia_refreshless": {
  "type": "vcs",
  "url": "https://github.com/neurocracy/drupal-omnipedia-refreshless.git"
}
```

### Installing

Once you've completed all of the above, run `composer require
"drupal/omnipedia_refreshless:1.x-dev@dev"` in the root of your project to have
Composer install this and its required dependencies for you.

----

Provides [an updated Drupal core
patch](https://www.drupal.org/project/refreshless/issues/3292843) and works
around several issues:

* [Add hook/event to alter cache contexts that RefreshLess considers sensitive to changes](https://www.drupal.org/project/refreshless/issues/3279949)

* [Consider attaching RefreshLess even when no session exists/user is anonymous](https://www.drupal.org/project/refreshless/issues/3279955)

* [Add attribute to empty regions for CSS](https://www.drupal.org/project/refreshless/issues/3293592)
