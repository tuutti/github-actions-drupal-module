<?php

declare(strict_types = 1);

namespace Drupal\Tests\github_actions_example\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\WebDriverTestBase;

/**
 * Basic functional JS test.
 *
 * @group github_actions_example
 */
class JsSettingTest extends WebDriverTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'github_actions_example',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests drupalSettings.
   */
  public function testSettings() : void {
    $this->drupalGet('<front>');

    $settings = $this->getDrupalSettings();
    $this->assertNotEmpty($settings);
  }

}

