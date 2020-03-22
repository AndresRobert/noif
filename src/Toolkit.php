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
     * @param $number
     *
     * @return string
     */
    public function replaceMeIf ($number): string {
        $type = $this->isMultipleOf($number, $this->getMultReplacements()['IT']);
        $type .= $this->isMultipleOf($number, $this->getMultReplacements()['Linio']);
        if (isset($this->getStringReplacements()[$type])) {
            return (string)$this->getStringReplacements()[$type];
        }
        return (string)$number;
    }
}