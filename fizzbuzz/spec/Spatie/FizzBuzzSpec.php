<?php

namespace spec\Spatie;

use PhpSpec\ObjectBehavior;

class FizzBuzzSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Spatie\FizzBuzz');
    }

    public function it_translates_1()
    {
        $this->translate(1)->shouldReturn(1);
    }

    public function it_translates_2()
    {
        $this->translate(2)->shouldReturn(2);
    }

    public function it_translates_3()
    {
        $this->translate(3)->shouldReturn('fizz');
    }

    public function it_translates_5()
    {
        $this->translate(5)->shouldReturn('buzz');
    }

    public function it_translates_15()
    {
        $this->translate(15)->shouldReturn('fizzbuzz');
    }

    public function it_translates_30()
    {
        $this->translate(30)->shouldReturn('fizzbuzz');
    }

    public function it_translates_up_to_a_given_value()
    {
        $this->translateUpTo(15)->shouldReturn([1, 2, 'fizz', 4, 'buzz', 'fizz', 7, 8, 'fizz', 'buzz', 11, 'fizz', 13, 14, 'fizzbuzz']);
    }

    public function it_can_translate_an_array()
    {
        $this->translate([1, 3, 15])->shouldReturn([1, 'fizz', 'fizzbuzz']);
    }
}
