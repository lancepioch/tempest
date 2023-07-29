<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Illuminate\Validation\Validator;
use Livewire\Component;

class CreateProject extends Component
{
    public string $title = '';
    public string $description = '';

    protected $rules = [
        'title' => 'required|min:1',
        'description' => 'required|min:1',
    ];

    public function save()
    {
        $this->withValidator(function (Validator $validator) {
            $validator->after(function ($validator) {
                foreach (array_reverse($validator->errors()->all()) as $error) {
                    session()->flash('flash.banner', $error);
                    session()->flash('flash.bannerStyle', 'danger');
                }

                $this->redirect('/dashboard');
            });
        })->validate();

        $this->validate();

        $team = auth()->user()->currentTeam;

        $team->projects()->save(
            new Project([
                'title' => $this->title,
                'description' => $this->description,
            ])
        );

        session()->flash('flash.banner', "Project $this->title was successfully created!");
        session()->flash('flash.bannerStyle', 'success');

        $this->redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.create-project');
    }
}
