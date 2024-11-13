<?php

declare(strict_types=1);

namespace Src;

interface CardCombination
{
    public function hasCombination() : bool;
    public function calculateTotalValue() : int;
}