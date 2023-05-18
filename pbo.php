<?php
class Animal {
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis . ".";
    }
}

class Cat extends Animal {
    public function getInfo() {
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis . ". " . ucfirst($this->jenis) ." adalah salah satu hewan mamalia karnivora yang berasal dari keluarga Felidae.";
    }
}

class Dog extends Animal {
    public function getInfo() {
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis . ". " . ucfirst($this->jenis) ." adalah hewan pemangsa dan hewan pemakan bangkai, memiliki gigi tajam dan rahang yang kuat untuk menyerang, menggigit, dan mencabik-cabik makanan.";
    }
}

$animal = new Animal("Angsa", "Unggas");
echo $animal->getInfo() . "\n <br>";

$cat = new Cat("Robby", "kucing");
echo $cat->getInfo() . "\n <br>";

$dog = new Dog("Bidin", "anjing");
echo $dog->getInfo() . "\n";

?>