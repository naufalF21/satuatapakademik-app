<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LikeButton extends Component
{
    public Post $post;

    public function toggleLike()
    {
        if (auth()->guest()) {
            return $this->redirect(route('login'));
        }

        $user = auth()->user();

        if ($user->hasLiked($this->post)) {
            $user->likes()->detach($this->post);
            return;
        }

        $user->likes()->attach($this->post);
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}
