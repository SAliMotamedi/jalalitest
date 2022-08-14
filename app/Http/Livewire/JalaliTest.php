<?php

namespace App\Http\Livewire;

use Ariaieboy\FilamentJalaliDatetimepicker\Forms\Components\JalaliDateTimePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class JalaliTest extends Component implements HasForms

{
    use InteractsWithForms;

    protected function getFormSchema(): array
    {
        return [
            DateTimePicker::make('date2')->label('تاریخ 1'),
            JalaliDateTimePicker::make('date')->label('تاریخ'),
        ];
    }

    public function render()
    {
        return view('livewire.jalali-test')
            ->extends('layouts.app')->section('admin_content');
    }
}
