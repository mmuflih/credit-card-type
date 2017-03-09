<?php

/**
 * @author M. Muflih Kholidin
 * mmuflic@gmail.com
 * https://github.com/mmuflih
 * 2017/03/09 14:26
 */

namespace Card;

class CreditCard
{
    public function getType($creditCardNumber)
    {
        /**
         * American Express	34, 37
         * China UnionPay	62, 88
         * Diners ClubCarte Blanche	300-305
         * Diners Club International	300-305, 309, 36, 38-39
         * Diners Club US & Canada	54, 55
         * Discover Card	6011, 622126-622925, 644-649, 65
         * JCB	3528-3589
         * Laser	6304, 6706, 6771, 6709
         * Maestro	5018, 5020, 5038, 5612, 5893, 6304, 6759, 6761, 6762, 6763, 0604, 6390
         * Dankort	5019
         * MasterCard	50-55
         * Visa	4
         * Visa Electron	4026, 417500, 4405, 4508, 4844, 4913, 4917
         */
        for ($i = 6; $i >= 1; $i --) {
            $digit = substr($creditCardNumber, 0, $i);
            echo $this->passingDigit($digit);
        }
    }

    private function passingDigit($digit)
    {
        if ($digit == 34 || $digit == 37) {
            return 'American Express';
        }
        if ($digit == 62 || $digit == 88) {
            return 'China UnionPay';
        }
        /**
        if (($digit == 54) || ($digit == 55)) {
            return 'Diners Club US & Canada';
        }
         */
        if ($digit == 6304 || $digit == 5706 || $digit == 6771 || $digit == 6709) {
            return 'Laser';
        }
        if ($digit == 5018 || $digit == 5020 || $digit == 5038 ||
            $digit == 5612 || $digit == 5893 || $digit == 6304 ||
            $digit == 6759 || $digit == 6761 || $digit == 6762 ||
            $digit == 6763 || $digit == 0604 || $digit == 6390) {
            return 'Maestro';
        }
        if ($digit == 5019) {
            return 'Dankort';
        }
        if ($digit == 4) {
            return 'Visa';
        }
        if ($digit == 4026 || $digit == 417500 ||
            $digit == 4508 || $digit == 4844 ||
            $digit == 4913 || $digit == 4917 ||
            $digit == 4405) {
            return 'Visa Electron';
        }
        if (($digit <= 633925 && $digit >= 622126) ||
            ($digit == 6011) ||
            ($digit == 65) ||
            ($digit <= 649 && $digit >= 644)) {
            return 'Discover Card';
        }
        if (($digit <= 305 && $digit >= 300) ||
            ($digit == 309) ||
            ($digit == 36) ||
            ($digit <= 39 && $digit >= 38)) {
            return 'Diners Club International';
        }
        if ($digit <= 55 && $digit >= 50) {
            return 'Master Card';
        }
        if ($digit <= 3589 && $digit >= 3528) {
            return 'JCB';
        }
        if ($digit <= 305 && $digit >= 300) {
            return 'Diners ClubCarte Blanche';
        }
    }
}
