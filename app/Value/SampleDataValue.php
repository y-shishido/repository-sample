<?php


namespace App\Value;


class SampleDataValue
{

    private string $fromDate;

    private string $toDate;

    private int $price;

    /**
     * @param string $fromDate
     */
    public function setFromDate(string $fromDate): void
    {
        $this->fromDate = $fromDate;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @param string $toDate
     */
    public function setToDate(string $toDate): void
    {
        $this->toDate = $toDate;
    }

    /**
     * @return string
     */
    public function getFromDate(): string
    {
        return $this->fromDate;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getToDate(): string
    {
        return $this->toDate;
    }

}