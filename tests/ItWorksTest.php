<?php

namespace App\Test;

use App\SomeService;
use Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor;

it('works', function () {
    $service = new SomeService(new ChainTokenExtractor([]));
    expect($service)->toBeInstanceOf(SomeService::class);
});
