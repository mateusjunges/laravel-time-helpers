<?php

namespace Junges\TimeHelpers;

use Closure;
use Carbon\Traits\Date;

class TimeHelper
{
    public int $time;
    public $generated_time;
    public string $tz;

    public function __construct($tz = null)
    {
        if (is_null($tz)) {
            $this->tz = config("app.timezone");
        }
    }

    public function new(int $time)
    {
        $this->time = $time;

        return $this;
    }

    public function minutes()
    {
        $this->generated_time = Date::now($this->tz)->addMinutes($this->time);

        return $this->generated_time;
    }

    public function hours()
    {
        $this->generated_time = Date::now($this->tz)->addHours($this->time);

        return $this->generated_time;
    }

    public function days()
    {
        $this->generated_time = Date::now($this->tz)->addDays($this->time);

        return $this->generated_time;
    }

    public function weeks()
    {
        $this->generated_time = Date::now($this->tz)->addWeeks($this->time);

        return $this->generated_time;
    }

    public function weekDays()
    {
        $this->generated_time = Date::now($this->tz)->addWeekdays($this->time);

        return $this->generated_time;
    }

    public function months()
    {
        $this->generated_time = Date::now($this->tz)->addMonths($this->time);

        return $this->generated_time;
    }

    public function years()
    {
        $this->generated_time = Date::now($this->tz)->addYears($this->time);

        return $this->generated_time;
    }

    public function centuries()
    {
        $this->generated_time = Date::now($this->tz)->addCenturies($this->time);

        return $this->generated_time;
    }

    public function then(Closure $closure)
    {
        time_sleep_until($this->generated_time->timestamp);

        return $closure();
    }
}
