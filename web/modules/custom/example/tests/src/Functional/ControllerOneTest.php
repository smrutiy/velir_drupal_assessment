<?php

namespace Drupal\Tests\example\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Test the controller one with route hello-velir-1
 * @group example
 */

 class ControllerOneTest extends BrowserTestBase{
   
    /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';
  
  /**
   * {@inheritdoc}
   */
  public function testSimpleText() {
    $this->drupalGet('hello-velir-1');
    $this->assertTrue('Hello, my name is ', 'The text "Hello, my name is " appears on the hello-velir-1 page.');
  }
 }