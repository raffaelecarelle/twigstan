<?php

declare(strict_types=1);

namespace TwigStan\EndToEnd\Macro;

use TwigStan\EndToEnd\AbstractEndToEndTestCase;

final class MacroTest extends AbstractEndToEndTestCase
{
    public function test(): void
    {
        parent::runTests(__DIR__);
    }
}
