<?php

namespace App\Http\Livewire;

use App\Service\Stats;
use Livewire\Component;

class SalesDashboard extends Component
{
    public $newOrders;

    public $salesAmount;

    public $satisfactions;

    protected $listeners = ['fetchStats'];

    public function mount()
    {
        $this->assignStats();
    }

    public function fetchStats()
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
