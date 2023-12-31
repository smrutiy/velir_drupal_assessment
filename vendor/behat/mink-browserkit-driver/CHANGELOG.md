2.2.0 / 2023-12-09
==================

New features:

* Added support for Symfony 7.
* Added types for method parameters
* Improve the handling of invalid values passed to `setValue`

Testsuite:

* Added CI jobs running on PHP 8.2 and 8.3
* Added static analysis with phpstan

2.1.0 / 2022-03-28
==================

New features:

* Added support for Symfony 6.

2.0.0 / 2021-12-13
==================

BC break:

* The `getClient` method now returns an AbstractBrowser from BrowserKit instead of the deprecated Client.
* The constructor now takes an AbstractBrowser from BrowserKit instead of the deprecated Client.
* The deprecated methods `setRemoveHostFromUrl` and `setRemoveScriptFromUrl` have been removed

New features:

* Added support for Symfony 5.

Removed:

* Removed support for Symfony <4.4.
* Removed support for PHP <7.2.
* Removed deprecated methods

1.4.1 / 2021-12-10
==================

Bug fixes:

* Fixed the basic authentication implementation when using Browserkit clients other than the HttpKernel one.

1.4.0 / 2021-10-12
==================

Removed:

* Removed support for PHP 5.3

Bug fixes:

* Fixed the removal of cookies in a subpath

Testsuite:

* Added CI jobs running on PHP 7.4, 8.0 and 8.1

1.3.4 / 2020-03-11
==================

BC Break:

* Changed the return value for `getValue` on a select without any options to an empty string rather than `null` to respect the common contract between Mink drivers

Bug fixes:

* Changed phpdoc types from `Boolean` to `boolean` to be compatible with psalm type checking
* Improved compatibility with the HTML5 parsing of the symfony/dom-crawler component in 4.4+
* Removed usages of APIs deprecated in symfony/dom-crawler 4.4
* Send the configured headers when submitting forms

Testsuite:

* Removed HHVM from CI as they dropped support for PHP compatibility
* Added CI on PHP 7.2, 7.3 and 7.4

1.3.3 / 2018-05-02
==================

* Added Symfony 4.0 compatibility.

1.3.2 / 2016-03-05
==================

Testsuite:

* Disallowed failures on PHP 7 on Travis (tests were passing since a long time)
* Added HTML escaping of submitted values in the driver testsuite web-fixtures

1.3.1 / 2016-01-19
==================

* Added Symfony 3.0 compatibility

1.3.0 / 2015-09-21
==================

BC break:

* Dropped support for Symfony 2.2 and older
* Bumped required PHP version to 5.3.6

New features:

* Updated the driver to use findElementsXpaths for Mink 1.7 and forward compatibility with Mink 2

Bug fixes:

* Improved the exception message when clicking on an invalid element
* Use `saveHTML` to get correct HTML code back

Misc:

* Updated the repository structure to PSR-4

1.2.0 / 2014-09-26
==================

BC break:

* Changed the behavior of `getValue` for checkboxes according to the BC break in Mink 1.6

New features:

* Implemented `getOuterHtml`
* Added the support of manipulating forms without submit buttons
* Added support of any request headers instead of supporting only a few hardcoded ones
* Added support of any BrowserKit client using `filterResponse` when using BrowserKit 2.3+
* Added the support of reset buttons
* Implemented `submitForm`
* Implemented `isSelected`

Bug fixes:

* Fixed the support of options without value attribute in `isSelected` and `getValue`
* Added the support of radio buttons in `isChecked`
* Fixed the submission of empty textarea fields
* Refactored the handling of request headers to ensure they are reset when resetting the driver
* Fixed the handling of buttons to submit only for submit buttons rather than all buttons
* Fixed the code to throw exceptions rather than triggering a fatal error for invalid usages of the driver
* Fixed the removal of cookies
* Fixed the submission of form fields with same name and without id
* Fixed `getAttribute` to return `null` for missing attributes rather than an empty string

Testing:

* Updated the testsuite to use the new Mink 1.6 driver testsuite
* Added testing on HHVM
