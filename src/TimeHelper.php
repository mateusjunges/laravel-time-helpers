<?php

namespace Junges\TimeHelpers;

use Carbon\Carbon;
use Junges\TimeHelpers\Exceptions\InvalidTimeOperationMethodException;

class TimeHelper
{
    const ADD_TIME = 'add';
    const SUB_TIME = 'sub';

    public int $time;

    /**
     * TimeHelper constructor.
     *
     * @param string      $method
     * @param string|null $tz
     *
     * @throws InvalidTimeOperationMethodException
     */
    public function __construct(
        private string $method,
        public ?string $tz = null
    ) {
        if ($tz == null) {
            $this->tz = config('app.timezone');
        }

        if (!in_array($method, [self::ADD_TIME, self::SUB_TIME])) {
            throw InvalidTimeOperationMethodException::methodNotListed($method);
        }
    }

    public function new(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function seconds(): Carbon
    {
        return now($this->tz)->{"{$this->method}Seconds"}($this->time);
    }

    public function minutes(): Carbon
    {
        return now($this->tz)->{"{$this->method}Minutes"}($this->time);
    }

    public function hours(): Carbon
    {
        return  now($this->tz)->{"{$this->method}Hours"}($this->time);
    }

    public function days(): Carbon
    {
        return now($this->tz)->{"{$this->method}Days"}($this->time);
    }

    public function weeks(): Carbon
    {
        return now($this->tz)->{"{$this->method}Weeks"}($this->time);
    }

    public function weekDays(): Carbon
    {
        return now($this->tz)->{"{$this->method}weekDays"}($this->time);
    }

    public function months(): Carbon
    {
        return now($this->tz)->{"{$this->method}Months"}($this->time);
    }

    public function years(): Carbon
    {
        return now($this->tz)->{"{$this->method}Years"}($this->time);
    }

    public function centuries(): Carbon
    {
        return now($this->tz)->{"{$this->method}Centuries"}($this->time);
    }
}
