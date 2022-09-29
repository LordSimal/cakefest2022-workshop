<?php
declare(strict_types=1);

namespace App\Services;

class MyService {

    private int $supersecret;

    public function __construct()
    {
        $this->supersecret = random_int(0, 9999);
    }
}
