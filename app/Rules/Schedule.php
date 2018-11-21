<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Schedule implements Rule
{
    private $hourFrom;

    private $hourTo;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($hourFrom, $hourTo)
    {
        if ($hourFrom === null) {
            $this->hourFrom = [];
        } else {
            $this->hourFrom = $hourFrom;
        }

        if ($hourTo === null) {
            $this->hourTo = [];
        } else {
            $this->hourTo = $hourTo;
        }
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (count($this->hourFrom) === 0 || count($this->hourTo) === 0) {
            return true;
        }
        
        $dayID = $value[0];
        return $this->hourFrom[$dayID] < $this->hourTo[$dayID];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '終了時刻より開始時間を前の時間にしてください';
    }
}