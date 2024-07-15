<?php

require_once __DIR__ . "/Trait.php";

class TraitConflict
{
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}
