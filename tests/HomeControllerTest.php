<?php


use PHPUnit\Framework\TestCase;
use Controllers\HomeController;

class HomeControllerTest extends TestCase
{
    private $homeController;

    protected function setUp(): void
    {
        $this->homeController = new HomeController();
    }

    public function testShowHome()
    {
        // Capture the output of the method
        ob_start();
        $this->homeController->showHome();
        $output = ob_get_clean();

        // Check for expected output in the HTML
        $this->assertStringContainsString('Welcome to our online store!', $output);
        $this->assertStringContainsString('Categories', $output);
    }
}
