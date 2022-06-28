Experimental support for the
[RefreshLess](https://www.drupal.org/project/refreshless) contributed module for
[Omnipedia](https://omnipedia.app/).

⚠️⚠️⚠️ ***Here be potential spoilers. Proceed at your own risk.*** ⚠️⚠️⚠️

----

# Why open source?

We're dismayed by how much knowledge and technology is kept under lock and key
in the videogame industry, with years of work often never seeing the light of
day when projects are cancelled. We've gotten to where we are by building upon
the work of countless others, and we want to keep that going. We hope that some
part of this codebase is useful or will inspire someone out there.

----

# Requirements

* [Drupal 9](https://www.drupal.org/download) ([Drupal 8 is end-of-life](https://www.drupal.org/psa-2021-11-30))

* PHP 8

* [Composer](https://getcomposer.org/)

----

Provides an updated Drupal core patch and works around several issues:

* [Add hook/event to alter cache contexts that RefreshLess considers sensitive to changes](https://www.drupal.org/project/refreshless/issues/3279949)

* [Consider attaching RefreshLess even when no session exists/user is anonymous](https://www.drupal.org/project/refreshless/issues/3279955)

----

Use at your own risk; more info will be provided later.
