<?php

declare(strict_types=1);

namespace App;

use Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor;

final class SomeService
{

    public function __construct(
        private ChainTokenExtractor $extractor,
    ) {
    }
}
