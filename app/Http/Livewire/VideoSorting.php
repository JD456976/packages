<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Video;
use Livewire\Component;
use Livewire\WithPagination;

class VideoSorting extends Component
{
    use WithPagination;

    public $sortBy;
    public $perPage;

    public function mount()
    {
        $this->sortBy = "default";
        $this->perPage = 6;
    }

    public function render()
    {
        if ($this->sortBy == 'newest')
        {
            $videos = Video::orderBy('created_at', 'desc')->paginate($this->perPage);
        }
        else if ($this->sortBy == 'oldest')
        {
            $videos = Video::orderBy('created_at', 'asc')->paginate($this->perPage);
        }
        else if ($this->sortBy == 'featured')
        {
            $videos = Video::where('is_featured',1)->paginate($this->perPage);
        }
        else if ($this->sortBy == 'zip')
        {
            $videos = Video::orderBy('zip', 'desc')->paginate($this->perPage);
        }
        else if ($this->sortBy == 'views')
        {
            $videos = Video::orderByViews()->get();
        }
        else
        {
            $videos = Video::paginate($this->perPage);
        }

        return view('livewire.video-sorting', ['videos' => $videos]);
    }
}
