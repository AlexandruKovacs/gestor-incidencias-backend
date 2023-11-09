<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class LuckyController {

    #[Route('/lucky-number')]
    public function number() {
        $number = random_int(0, 100);

        return 'El número es: ' . $number;
    }
}