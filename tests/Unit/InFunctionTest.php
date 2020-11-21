<?php

it('returns a time in the future', function() {
    $time = in(10)->minutes();

    $this->assertTrue($time->greaterThan(now()));
});