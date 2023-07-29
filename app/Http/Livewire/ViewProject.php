<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class ViewProject extends Component
{
    use AuthorizesRequests;

    public $project;

    public function mount(Project $project)
    {
        $this->project = $project;

        $this->authorize('view', $project);
    }

    public function render()
    {
        return view('livewire.view-project');
    }
}
