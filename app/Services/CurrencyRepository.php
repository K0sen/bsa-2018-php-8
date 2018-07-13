<?php

namespace App\Services;

use App\Currency;
use Illuminate\Database\Eloquent\Collection;

class CurrencyRepository implements CurrencyRepositoryInterface
{
    /**
     * @return Collection
     */
    public function findAll(): Collection
    {
        return Currency::all();
    }

    /**
     * @param int $id
     * @return Currency|null
     */
    public function findById(int $id): ?Currency
    {
        return Currency::find($id);
    }

    /**
     * @param int $id
     * @throws \Exception
     */
    public function delete(int $id): void
    {
        if ($currency = $this->findById($id)) {
            $currency->delete();
        }
    }

//    public function findActive(): array
//    {
//        return array_filter($this->currencies, function ($currency) {
//            /** @var $currency Currency */
//            return $currency->isActive();
//        });

//    }
//    public function findById(int $id): ?Currency
//    {
//        foreach ($this->currencies as $currency) {
//            if ($currency->getId() === $id) {
//                return $currency;
//            }
//        }
//
//        return null;

//    }
//    public function save(Currency $currency): void
//    {
//        if ($this->findById($currency->getId()) === null) {
//            $this->currencies[] = $currency;
//        } else {
//            $index = $this->findCurrencyIndex($currency);
//            if ($index !== null) {
//                $this->currencies[$index] = $currency;
//            }
//        }

//    }
//
//    public function findAvailableId(): int
//    {
//        for ($id = 1; $id <= $this->getCurrenciesCount(); $id++) {
//            if ($this->findById($id) === null) {
//                return $id;
//            }
//        }
//
//        return $id;
//    }

//    private function findCurrencyIndex(Currency $currency): ?int
//    {
//        foreach ($this->currencies as $index => $actualCurrency) {
//            if ($actualCurrency->getId() === $currency->getId()) {
//                return $index;
//            }
//        }
//
//        return null;
//    }

//    private function getCurrenciesCount(): int
//    {
//        return \count($this->currencies);
//    }
}
