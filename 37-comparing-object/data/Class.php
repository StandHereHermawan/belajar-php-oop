<?php

class Student
{
    private string $id;
    private string $name;
    private int $value;

    public function __construct(string $id, string $name, ?int $value = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
    }

    # function ini dipanggil ketika keyword clone dipanggil dalam variable dengan tipe data StudentAgain.
    public function __clone()
    {
        # Properties pada function unset pada variable tujuan clone akan dihapus setelah diclone.
        echo "__clone() dipanggil sebelum function unset." . PHP_EOL;
        unset($this->id);
        unset($this->value);
        echo "Object Get Cloned and Properties deleted" . PHP_EOL;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setValue(int $value): void
    {
        $this->value = $value;
    }
}
