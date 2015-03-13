<?php

class Palindromo {

    private $pdmString;

    private function setPdmString($string) {
        if ($this->isString($string)) {
            $stringLimpa = mb_strtolower($string);
            $stringLimpa = $this->removeSpace($stringLimpa);
            $stringLimpa = $this->removeNumbers($stringLimpa);
            $this->pdmString = $stringLimpa;
        } else {
            throw new RuntimeException('O dado de entrada não é uma string');
        }
    }

    public function getPdmString() {
        return $this->pdmString;
    }

    private function isString($string) {
        if (is_string($string)) {
            $retorno = true;
        } else {
            $retorno = false;
        }
        return $retorno;
    }

    private function removeNumbers($string) {
        return str_replace(range(0, 9), "", $string);
    }

    private function removeSpace($string) {

        return str_replace(" ", "", $string);
    }

    public function isPolindromo($string) {
        $this->setPdmString($string);
        $arrayString = str_split($this->pdmString);
        $arraySize = sizeof($arrayString);

        if ($arraySize % 2 !== 0) {
            $positionMiddleChar = round($arraySize / 2) - 1;
            unset($arrayString[$positionMiddleChar]);
            $arraySize = sizeof($arrayString);
            $arrayString = array_values($arrayString);
        }

        $numbOfPairs = $arraySize / 2;
        for ($a = 0; $numbOfPairs > $a; $a++) {
            $lastPosition = ($arraySize - $a) - 1;
            if ($arrayString[$a] !== $arrayString[$lastPosition]) {
                $retono = false;
                break;
            } else {
                $retono = true;
            }
        }
        return $retono;
    }

}
