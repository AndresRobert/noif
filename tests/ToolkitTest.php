<?php declare(strict_types = 1);

require dirname(__FILE__).'/../src/Toolkit.php';
use PHPUnit\Framework\TestCase;

final class ToolkitTest extends TestCase {

    /**
     * @test
     */
    public function numberReplacedByLinio (): void {
        $this->assertEquals(
            'Linio',
            (new Tools\Toolkit())->replaceMeIf(18)
        );
    }

    /**
     * @test
     */
    public function numberReplacedByIt (): void {
        $this->assertSame(
            'IT',
            (new Tools\Toolkit())->replaceMeIf(55)
        );
    }

    /**
     * @test
     */
    public function numberReplacedByLinianos (): void {
        $this->assertSame(
            'Linianos',
            (new Tools\Toolkit())->replaceMeIf(30)
        );
    }

    /**
     * @test
     */
    public function numberNotReplaced (): void {
        $this->assertSame(
            '7',
            (new Tools\Toolkit())->replaceMeIf(7)
        );
    }

}