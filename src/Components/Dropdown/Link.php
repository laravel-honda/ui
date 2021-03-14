<?php

namespace Starts\Ui\Components\Dropdown;

use Illuminate\View\Component;
use Starts\Ui\Support\UrlResolver;

class Link extends Component
{
    public string $content;
    public string $href;
    public ?string $icon;
    public string $iconSet;

    public function __construct(string $href = null, string $content = null, string $icon = null, string $iconSet = 'tabler')
    {
        $this->content = $content;
        $this->href    = UrlResolver::guess($href);
        $this->icon    = $icon;
        $this->iconSet = $iconSet;
    }

    public function render()
    {
        return view('ui::dropdown.link');
    }
}
