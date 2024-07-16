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

    # Magic Function.
    # Magic function yang digunakan sebagai representasi string sebuah object.
    public function __tostring(): string
    {
        return "Student id:$this->id, Student name:$this->name, Student value:$this->value";
    }

    # Magic Function.
    # dieksekusi ketika object yang kita buat dianggap sebagai function.
    public function __invoke(...$arguments)
    {
        $join = join(", ", $arguments);
        echo "Invoke Student with arguments $join." . PHP_EOL;
    }

    # Magic Function.
    # Function var_dump() sebenarnya memanggil function __debugInfo() 
    # Jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()
    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value
        ];
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
