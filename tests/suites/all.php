<?php

namespace MangoPay\Tests;
define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__.'/simpletest/autorun.php');

/**
 * Runs all test cases
 */
class All extends \TestSuite {

    function __construct() {
        parent::__construct();
        $this->collect(__ROOT__.'/cases', new TestCasesCollector());
    }
}

class TestCasesCollector extends \SimpleCollector {

    protected function isHidden($filename) {

        // ignore base.php: with abstract test case class (throws Bad TestSuite [No runnable test cases] otherwise)
        if ($filename == "base.php" || $filename == "index.php")
            return true;

        return parent::isHidden($filename);
    }
}

