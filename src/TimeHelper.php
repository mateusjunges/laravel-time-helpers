<?php

namespace Junges\TimeHelpers;

use Carbon\Carbon;
use Junges\TimeHelpers\Exceptions\InvalidTimeOperationMethodException;

class TimeHelper
{
    public int $time;
    public string $tz;
    private string $method;

    /**
     * TimeHelper constructor.
     * @param string $method
     * @param string|null $tz
     * @throws InvalidTimeOperationMethodException
     */
    public function __construct(string $method, string $tz = null)
    {
        if (is_null($tz)) {
            $this->tz = config("app.timezone");
        }

        if (! in_array($method, ["add", "sub"])) {
            throw InvalidTimeOperationMethodException::methodNotListed($method);
        }

        $this->method = $method;
    }

    public function new(int $time)
    {
        $this->time = $time;

        return $this;
    }

    public function minutes()
    {
        return now($this->tz)->{"{$this->method}Minutes"}($this->time);
    }

    public function hours()
    {
        return  now($this->tz)->{"{$this->method}Hours"}($this->time);
    }

    public function days()
    {
        return now($this->tz)->{"{$this->method}Days"}($this->time);
    }

    public function weeks()
    {
        return now($this->tz)->{"{$this->method}Weeks"}($this->time);
    }

    public function weekDays()
    {
        return now($this->tz)->{"{$this->method}weekDays"}($this->time);
    }

    public function months()
    {
        return now($this->tz)->{"{$this->method}Months"}($this->time);
    }

    public function years()
    {
        return now($this->tz)->{"{$this->method}Years"}($this->time);
    }

    public function centuries()
    {
        return now($this->tz)->{"{$this->method}Centuries"}($this->time);

    }
}
