<?php

require_once __DIR__ . "/Trait.php";

use Data\Traits\{SayGoodBye, SayHello, HasIdentity};

class Person
{
    use SayGoodBye, SayHello, HasIdentity;
}
