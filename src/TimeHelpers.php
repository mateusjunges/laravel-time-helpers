<?php

namespace Junges\TimeHelpers;

use Carbon\Carbon;
use Closure;

class TimeHelpers
{
    public int $time;
    public Carbon $generated_time;

    public function new(int $time)
    {
        $this->time = $time;

        return $this;
    }

    public function minutes()
    {
        $this->generated_time = now()->addMinutes($this->time);

        return $this->generated_time;
    }

    public function hours()
    {
        $this->generated_time = now()->addHours($this->time);

        return $this->generated_time;
    }

    public function days()
    {
        $this->generated_time = now()->addDays($this->time);

        return $this->generated_time;
    }

    public function weeks()
    {
        $this->generated_time = now()->addWeeks($this->time);

        return $this->generated_time;
    }

    public function weekDays()
    {
        $this->generated_time = now()->addWeekdays($this->time);

        return $this->generated_time;
    }

    public function months()
    {
        $this->generated_time = now()->addMonths($this->time);

        return $this->generated_time;
    }

    public function years()
    {
        $this->generated_time = now()->addYears($this->time);

        return $this->generated_time;
    }

    public function centuries()
    {
        $this->generated_time = now()->addCenturies($this->time);

        return $this->generated_time;
    }

    public function then(Closure $closure)
    {
        time_sleep_until($this->generated_time->timestamp);

        return $closure();
    }
}
