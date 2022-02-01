<?php

namespace App\Http\Livewire\Sort;

use App\Models\Card as ModelsCard;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class Card extends Component implements HasForms
{
    use InteractsWithForms;

    public ModelsCard $card;
    public $editForm = false;
    public $formData;

    public function mount()
    {
        $this->form->fill([
            'name' => $this->card->name,
            'content' => $this->card->content,
        ]);
    }

    public function render()
    {
        return view('livewire.sort.card');
    }

    public function startEdit()
    {
        $this->editForm = true;
    }

    public function stopEdit()
    {
        $this->editForm = false;
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')->required(),
            Textarea::make('content')->rows(2),
        ];
    }

    protected function getFormStatePath(): string
    {
        return 'formData';
    }

    public function submit() {
        $formData = $this->form->getState();

        $this->card->name = $formData['name'];
        $this->card->content = $formData['content'];
        $this->card->save();

        $this->editForm = false;
    }
}
