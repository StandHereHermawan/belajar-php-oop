<?php

namespace Data;

class Programmer
{

    private string $name;
    private string $title;

    public function __construct(string $name, string $title = "General Programmer")
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}

class BackendProgrammer extends Programmer
{
    # Kode Backend Programmer
    public function __construct(string $name, string $title = "Backend Programmer")
    {
        parent::__construct($name, $title);
    }
}

class FrontendProgrammer extends Programmer
{
    # Kode FrontEnd Programmer
    public function __construct(string $name, string $title = "Frontend Programmer")
    {
        parent::__construct($name, $title);
    }
}

class Company
{
    private Programmer $programmer;

    public function __construct(Programmer $programmer)
    {
        $this->programmer = $programmer;
    }

    public function getProgrammer(): Programmer
    {
        return $this->programmer;
    }

    public function setProgrammer(Programmer $programmer): void
    {
        $this->programmer = $programmer;
    }
}
