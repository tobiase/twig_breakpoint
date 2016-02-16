<?php

/**
 * @file
 * Contains Drupal\twig_extension_example\TwigExtension.
 */

namespace Drupal\twig_breakpoint\TwigBreakpoint;

/**
 * Provides a twig function that is intended sets an xdebug breakpoint.
 *
 * @ingroup twig_extension_example
 */
class TwigBreakpoint extends \Twig_Extension {
  /**
   * Gets a unique identifier for this Twig extension.
   *
   * @return string
   *   A unique identifier for this Twig extension.
   */
  public function getName() {
    return 'twig_breakpoint';
  }

  /**
   * Generates a list of all Twig functions that this extension defines.
   *
   * @return array
   *   A key/value array that defines a custom Twig functions. The key denotes the
   *   function name used in the tag, e.g.:
   *   @code
   *   {{ breakpoint() }}
   *   @endcode
   *
   *   The value is a standard PHP callback that defines what the function does.
   */
  public function getFunctions() {
    return array(
      new \Twig_SimpleFunction('breakpoint', 'xdebug_break')
    );
  }

}
