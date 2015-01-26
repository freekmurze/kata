<?php

namespace Spatie;

class FizzBuzz
{
    protected $rules = [
        ['isDivisableBy' => 3, 'word' => 'fizz'],
        ['isDivisableBy' => 5, 'word' => 'buzz'],
    ];

    /**
     * Translate the given number(s) to a fizz buzz result
     *
     * @param  int|array $number
     * @return string
     */
    public function translate($number)
    {
        return is_array($number) ? $this->translateArray($number) : $this->translateSingleNumber($number);
    }

    /**
     * Translate all numbers up to the given number
     *
     * @param  int   $limit
     * @return array
     */
    public function translateUpTo($limit)
    {
        $fizzBuzzArray = [];

        foreach (range(1, $limit) as $number) {
            $fizzBuzzArray[] = $this->translate($number);
        }

        return $fizzBuzzArray;
    }

    /**
     * Translate the given number to a fizz buzz result
     *
     * @param $number
     * @return string
     */
    private function translateSingleNumber($number)
    {
        $result = '';

        foreach ($this->rules as $rule) {
            $result .= $this->getRuleResult($number, $rule);
        }

        if ($result == '') {
            $result = $number;
        }

        return $result;
    }

    /**
     * Translate the given numberArray to an array with fizz buzz results
     *
     * @param  array $numberArray
     * @return array
     */
    private function translateArray($numberArray)
    {
        $fizzBuzzArray = [];

        foreach ($numberArray as $number) {
            $fizzBuzzArray[] = $this->translate($number);
        }

        return $fizzBuzzArray;
    }

    /**
     * Get the result for the number for the given rule
     *
     * @param $number
     * @param $rule
     * @return string
     */
    private function getRuleResult($number, $rule)
    {
        $ruleDoesApply = ($number % $rule['isDivisableBy']) == 0;

        return ($ruleDoesApply ? $rule['word'] : '');
    }
}
