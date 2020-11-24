<?php

namespace App\Http\Livewire\Expense;

use Livewire\Component;

class ExpenseCreate extends Component
{
    public $description;
    public $amount;
    public $type;
    
    
    public function render()
    {
        return view('livewire.expense.expense-create');
    }
}
