<?php

namespace App\Http\Livewire;

use App\Service\Stats;
use Livewire\Component;

class SalesDashboard extends Component
{
    public $newOrders;

    public $salesAmount;

    public $satisfactions;

    public function mount()
    {
        $this->assignStats();
    }

    public function refresh()
    {
        $this->assignStats();
    }

    public function render()
    {
        return view('livewire.sales-dashboard');
    }

    private function assignStats()
    {
        $this->fill([
            'newOrders' => Stats::newOrders(),
            'salesAmount' => Stats::salesAmount(),
            'satisfactions' => Stats::satisfactions()
        ]);
    }
}
