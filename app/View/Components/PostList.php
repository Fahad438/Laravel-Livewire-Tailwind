<?php

namespace App\View\Components;

use App\Models\AddPost;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-list');
    }


    public function posts()
    {
        $posts = AddPost::all();
        return $posts;
    }
}
