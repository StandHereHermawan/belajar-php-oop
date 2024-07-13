<?php


# Namespace Data dengan sub-namespace One
# Cara pertama mendeklarasi namespace.
namespace Data\One {
    class Conflict
    {
        # Kode 1
        const AUTHOR = "Arief";
        const VERSION = "1.0-Conflict";
        var string $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function infoVersion()
        {
            echo "Author : " . Conflict::AUTHOR . PHP_EOL . "Version : " . Conflict::VERSION . PHP_EOL;
        }
    }

    class Dummy
    {
        # Kode 1
        const AUTHOR = "Arief";
        const VERSION = "1.0-Dummy";

        public function infoVersion()
        {
            echo "Author : " . Dummy::AUTHOR . PHP_EOL . "Version : " . Dummy::VERSION . PHP_EOL;
        }
    }

    class Sample
    {
        const AUTHOR = "Arief";
        const VERSION = "1.0-Sample";

        public function infoVersion()
        {
            echo "Author : " . Sample::AUTHOR . PHP_EOL . "Version : " . Sample::VERSION . PHP_EOL;
        }
    }
}

# Namespace Data dengan sub-namespace Two
namespace Data\Two {
    class Conflict
    {
        # Kode 2
        const AUTHOR = "Arief";
        const VERSION = "2.0";
        var string $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function infoVersion()
        {
            echo "Author : " . Conflict::AUTHOR . PHP_EOL . "Version : " . Conflict::VERSION . PHP_EOL;
        }
    }
}
