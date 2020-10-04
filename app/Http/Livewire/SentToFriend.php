<?php

namespace App\Http\Livewire;

use App\DTOs\TellAFriendDTO;
use App\Jobs\TellAFriendJob;
use App\Repositories\TellAFriendRepository;
use Livewire\Component;


class SentToFriend extends Component
{
    public $your_name;
    public $friends_email;
    public $friends_name;
    public $success;

    protected $rules = [
        'your_name'     => 'required',
        'friends_email' => 'required|email',
        'friends_name'  => 'required|min:5',
    ];

    public function contactFormSubmit(TellAFriendRepository $tellAFriendRepository)
    {
        $this->validate();

        $tellAFriendDTO = TellAFriendDTO::create($this->your_name, $this->friends_email, $this->friends_name);

        $tellAFriendRepository->store($tellAFriendDTO);

        $this->success = 'Your recommendation will reach your friend soon!';

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->your_name = null;
        $this->friends_email = null;
        $this->friends_name = null;
    }


    public function render()
    {
        return view('livewire.sent-to-friend');
    }
}
