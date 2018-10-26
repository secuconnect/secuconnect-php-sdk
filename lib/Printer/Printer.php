<?php

namespace Secuconnect\Client\Printer;

/**
 * Interface Printer
 */
interface Printer
{
    /**
     * Function to print user code from obtained token.
     *
     * @param object $token
     */
    public function printUserCode($token);
}
