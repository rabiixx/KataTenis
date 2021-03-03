<?php


namespace Deg540\PHPTestingBoilerplate;


class Tenis
{
    public function convierte_numero_romano_a_decimal(string $numeroRomano)
    {
        if($this->es_caso_base($numeroRomano)){
            return $this->calcula_caso_base($numeroRomano);
        }
        $total = 0;
        $numeroRomanoSeparado = str_split($numeroRomano);
        for ($i=0;$i<count($numeroRomanoSeparado);$i++) {
            $numeroRomanoSeparado[$i] = $this->convierte_numero_romano_a_decimal($numeroRomanoSeparado[$i]);
        }
        for ($i=count($numeroRomanoSeparado);$i>0;$i--){
            if($numeroRomanoSeparado[$i-2]<$numeroRomanoSeparado[$i-1]){
                $total = $total + $numeroRomanoSeparado[$i-1] - $numeroRomanoSeparado[$i-2];
                $i--;
            } else{
                $total = $total + $numeroRomanoSeparado[$i-1];
            }
        }
        return $total;
    }

    private function es_caso_base($numeroDecimal){
        if(($numeroDecimal == "I") || ($numeroDecimal == "IV") || ($numeroDecimal == "V") || ($numeroDecimal == "IX")  || ($numeroDecimal == "X") || ($numeroDecimal == "XL")  || ($numeroDecimal == "L") || ($numeroDecimal == "XC") || ($numeroDecimal == "C")){
            return true;
        }
        return false;
    }

    private function calcula_caso_base(string $numeroRomano)
    {
        $casosBase = array(
            "I" => 1,
            "IV" => 4,
            "V" => 5,
            "IX" => 9,
            "X" => 10,
            "XL" => 40,
            "L" => 50,
            "XC" => 90,
            "C" => 100,
        );
        foreach ($casosBase as $clave => $valor) {
            if ($clave == $numeroRomano) {
                return $valor;
            }
        }
    }
/*
    public function convierte_todos()
    {
        $numsRom = ["I","II","III","IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII", "XIII", "XIV", "XV", "XVI", "XVII", "XVIII", "XIX", "XX", "XXI", "XXII", "XXIII" ,"XXIV" ,"XXV" ,"XXVI", "XXVII", "XXVIII" ,"XXIX", "XXX" ,"XXXI" ,"XXXII", "XXXIII" ,"XXXIV", "XXXV", "XXXVI" ,"XXXVII", "XXXVIII" ,"XXXIX" ,"XL", "XLI", "XLII" ,"XLIII" ,"XLIV" ,"XLV" ,"XLVI", "XLVII" ,"XLVIII", "XLIX" ,"L" ,"LI", "LII","LIII", "LIV" ,"LV" ,"LVI", "LVII", "LVIII" ,"LIX", "LX", "LXI", "LXII", "LXIII", "LXIV", "LXV", "LXVI", "LXVII", "LXVIII", "LXIX", "LXX", "LXXI", "LXXII", "LXXIII", "LXXIV", "LXXV", "LXXVI", "LXXVII", "LXXVIII", "LXXIX", "LXXX", "LXXXI", "LXXXII", "LXXXIII", "LXXXIV", "LXXXV", "LXXXVI", "LXXXVII", "LXXXVIII", "LXXXIX", "XC", "XCI", "XCII", "XCIII", "XCIV", "XCV", "XCVI", "XCVII", "XCVIII", "XCIX", "C", "CI", "CII", "CIII", "CIV", "CV", "CVI", "CVII", "CVIII" ,"CIX", "CX" ,"CXI", "CXII", "CXIII" ,"CXIV", "CXV" ,"CXVI", "CXVII" ,"CXVIII" ,"CXIX" ,"CXX", "CXXI", "CXXII" ,"CXXIII" ,"CXXIV", "CXXV", "CXXVI", "CXXVII", "CXXVIII", "CXXIX" ,"CXXX", "CXXXI" ,"CXXXII", "CXXXIII", "CXXXIV", "CXXXV", "CXXXVI", "CXXXVII", "CXXXVIII", "CXXXIX", "CXL", "CXLI", "CXLII", "CXLIII", "CXLIV", "CXLV", "CXLVI", "CXLVII", "CXLVIII", "CXLIX", "CL"];
        $numsDec = [];
        for ($i=0;$i<count($numsRom);$i++){
            $numsDec[$i]=$this->convierte_numero_romano_a_decimal($numsRom[$i]);
        }
        return $numsDec;
    }*/
}