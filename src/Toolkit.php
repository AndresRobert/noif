<?php declare(strict_types = 1);

namespace Tools;

final class Toolkit {

    /** @var array */
    private $stringReplacements;

    /** @var array */
    private $multReplacements;

    public function __construct () {

        $this->stringReplacements = [
            '01' => 'Linio',
            '10' => 'IT',
            '11' => 'Linianos',
        ];

        $this->multReplacements = [
            'Linio' => 3,
            'IT' => 5,
        ];

    }

    /** @return array */
    public function getStringReplacements ()  : array {
        return $this->stringReplacements;
    }

    /** @return array */
    public function getMultReplacements (): array {
        return $this->multReplacements;
    }

    /**
     * @param $number
     * @param $multiple
     *
     * @return int
     */
    public function isMultipleOf ($number, $multiple): int {
        return (int)($number % $multiple == 0);
    }

    /**
     * For multiples of 3, instead of the number, print "Linio".
     * For multiples of 5 print "IT".
     * For numbers which are multiples of both 3 and 5, print "Linianos"
     *
     * @param $number
     *
     * @return string
     */
    public function replaceMeIf ($number): string {
        // Check if it's replaceable by IT
        $case = $this->isMultipleOf($number, $this->getMultReplacements()['IT']);
        // Check if it's (also) replaceable by Linio
        $case .= $this->isMultipleOf($number, $this->getMultReplacements()['Linio']);
        if (isset($this->getStringReplacements()[$case])) {
            return (string)$this->getStringReplacements()[$case];
        }
        return (string)$number;
    }
}