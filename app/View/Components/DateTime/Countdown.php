<?php

namespace App\View\Components\DateTime;

use Closure;
use DateInterval;
use DateTimeInterface;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Countdown extends Component
{
    public DateTimeInterface $expires;

    public function __construct(DateTimeInterface $expires)
    {
        $this->expires = $expires;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.date-time.countdown');
    }

    private function difference(): DateInterval
    {
        return $this->expires->diff(now());
    }

    private function days(): string
    {
        return sprintf('%02d', $this->difference()->d);
    }

    private function hours(): string
    {
        return sprintf('%02d', $this->difference()->h);
    }
}
