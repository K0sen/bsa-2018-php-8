<?php

namespace App\Services;

use App\Currency;
use Illuminate\Database\Eloquent\Collection;

interface CurrencyRepositoryInterface
{
    public function findAll(): Collection;

    public function delete(int $id): void;

    public function findById(int $id): ?Currency;

//    public function findActive(): array;
//
//
//    public function save(Currency $currency): void;
//
//    public function findAvailableId(): int;
}
