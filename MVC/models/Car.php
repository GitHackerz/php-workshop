<?php

class Car {
    private int $id;
    private string $category;
    private string $brand; 
    private string $model;

    public function __construct(int $id, string $category, string $brand, string $model)
    {
        $this->id = $id;
        $this->category = $category;
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

}