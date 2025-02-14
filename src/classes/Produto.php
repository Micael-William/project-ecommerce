<?php
namespace Ecommerce\produto;
class Produto {
    private int $id;
    private string $name;
    private string $description;
    private string $price;
    private int $quantity;

    private null | string $file;

    public function __construct($name, string $description, string $price, int $quantity ) {
        // $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getId(): int {
        return $this->id;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getDescription(): string {
        return $this->description;
    }
    public function getPrice(): ?string {
        return $this->price;
    }
    public function getQuantity(): int {
        return $this->quantity;
    }
    public function __toString(): string {
        return "Produto: $this->name, Descrição: $this->description, Preço: $this->price, Quantidade: $this->quantity";
    }
    public function getFile(): ?string {
        return $this->file;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }
    public function setName(string $name): void {
        $this->name = $name;
    }
    public function setDescription(string $description): void {
        $this->description = $description;
    }
    public function setPrice(string $price): void {
        $this->price = $price;
    }
    public function setQuantity(int $quantity): void {
        $this->quantity = $quantity;
    }
    public function setFile($file): void {
        $this->file = $file;
    }
}