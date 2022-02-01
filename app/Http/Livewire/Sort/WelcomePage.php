<?php

namespace App\Http\Livewire\Sort;

use App\Models\Card;
use Illuminate\Support\Collection;
use Livewire\Component;

class WelcomePage extends Component
{
    public $cards;

    public function mount() {
        $cards = Card::orderBy('sort_order')->get();

        if(!$cards->count()) {
            for ($i=0; $i<20; $i++) {
                $number = $i+1;
                Card::create([
                    'name' => "Card {$number}",
                    'sort_order' => $number,
                ]);
            }
            $cards = Card::orderBy('sort_order')->get();
        }

        $this->cards = $cards;
    }

    public function render()
    {
        return view('livewire.sort.welcome-page')
            ->extends('layouts.app');
    }

    public function updateTaskOrder($reorders) {
        foreach ($reorders as $reorder) {
            $card = Card::find($reorder['value']);
            $card->sort_order = $reorder['order'];
            $card->save();
        }
    }
}
