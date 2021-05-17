<?php

namespace Honda\Ui\Generator;

use Symfony\Component\Finder\Finder;

class Generator
{
    protected string $docsPath;
    /** @var callable */
    protected $onPageCreated;

    public function __construct(string $docsPath)
    {
        $this->docsPath = $docsPath;

        if (!is_dir($docsPath)) {
            mkdir($docsPath);
        }
    }

    public function whenPageCreated(callable $callable): self
    {
        $this->onPageCreated = $callable;

        return $this;
    }

    public function startGeneration(): self
    {
        $components = $this->getComponents();

        foreach ($components as $component) {
            $page = [
                'path'  => $path = implode(DIRECTORY_SEPARATOR, $component),
                'class' => 'Honda\\Ui\\View\\Components\\' . str_replace(DIRECTORY_SEPARATOR, '\\', $path),
            ];

            call_user_func($this->onPageCreated, $page);
        }

        return $this;
    }

    protected function getComponents(): array
    {
        $components     = [];
        $componentsPath = implode(DIRECTORY_SEPARATOR, [substr(__DIR__, 0, mb_strrpos(__DIR__, '\\')), 'View', 'Components']);
        $files          = Finder::create()->in($componentsPath)->files();
        foreach ($files as $file) {
            if ($file->getFilenameWithoutExtension() === 'Component') {
                continue;
            }

            $components[] = explode('\\', str_replace([$componentsPath . '\\', '.php'], ['', ''], $file->getRealPath()));
        }

        return $components;
    }
}
