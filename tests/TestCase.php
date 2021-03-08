<?php

namespace Starts\Karter\Tests;

use Gajus\Dindent\Indenter;
use Orchestra\Testbench\TestCase as Base;
use Starts\Karter\KarterServiceProvider;
use Tests\Concerns\InteractsWithViews;

abstract class TestCase extends Base
{
    use InteractsWithViews;

    public function assertComponentRenders(string $expected, string $template, array $data = []): void
    {
        $indenter = new Indenter();
        $indenter->setElementType('h1', Indenter::ELEMENT_TYPE_INLINE);
        $indenter->setElementType('del', Indenter::ELEMENT_TYPE_INLINE);

        $blade    = (string) $this->blade($template, $data);
        $indented = $indenter->indent($blade);
        $cleaned  = str_replace(
            [' >', "\n/>", ' </div>', '> ', "\n>"],
            ['>', ' />', "\n</div>", ">\n    ", '>'],
            $indented,
        );

        $this->assertSame(
            preg_replace('/[\s+]/', '', $expected),
            preg_replace('/[\s+]/', '', $cleaned)
        );
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('view:clear');
    }

    protected function flashOld(array $input): void
    {
        session()->flashInput($input);

        request()->setLaravelSession(session());
    }

    protected function getPackageProviders($app): array
    {
        return [KarterServiceProvider::class];
    }
}
