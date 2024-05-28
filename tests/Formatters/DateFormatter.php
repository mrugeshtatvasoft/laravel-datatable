<?php

namespace mrugeshtatvasoft\DataTables\Tests\Formatters;

use Carbon\Carbon;
use DateTime;
use mrugeshtatvasoft\DataTables\Contracts\Formatter;

class DateFormatter implements Formatter
{
    public function __construct(public string $format = 'Y-m-d h:i a')
    {
    }

    public function format($value, $row): string
    {
        if ($value instanceof DateTime) {
            return $value->format($this->format);
        }

        return $value ? Carbon::parse($value)->format($this->format) : '';
    }
}
