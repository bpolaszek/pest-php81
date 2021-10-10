<?php

declare(strict_types=1);

namespace App\Tests\PhpUnit;

use App\SomeService;
use Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor;
use PHPUnit\Framework\TestCase;

final class ItWorksTest extends TestCase
{
    /**
     * @test
     */
    public function it_works(): void {
        $service = new SomeService(new ChainTokenExtractor([]));
        self::assertInstanceOf(SomeService::class, $service);
    }
}
