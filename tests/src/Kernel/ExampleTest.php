<?php

declare(strict_types = 1);

namespace Drupal\Tests\github_actions_example\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * The github actions example test.
 *
 * @group github_actions_example
 */
class ExampleTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['github_actions_example'];

  /**
   * Tests something.
   */
  public function testSomething() : void {
    $this->assertEquals(static::$modules, ['github_actions_example']);
  }

}
