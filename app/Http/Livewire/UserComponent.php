<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;

    protected $queryString =['search' => ['except' => '']];

    protected $listeners = ['changestatus'];

    public $search = '';
    public $perPage = '5';
    public $open = false;
    public $show = [];  // array of user

    public function updatingSearch(){
        $this->resetPage();
    }

    public function showUser(User $user)
    {
        $this->open = true;
        $this->show = $user->toArray();
        
    }

    public function changestatus(User $user){
        // $user->status = !$user->status;
        // $user->save();

        // User::find($user->id)->update(['status' => !$user->status]);
        if ($user->status == 1) {
            $user->update([
                'status' => '0'
            ]);
        }else {
            $user->update([
                'status' => '1'
            ]);
        }
    }

    public function render(){
        return view('livewire.user-component', ['users' => User::where('name', 'LIKE', "%{$this->search}%" )
        ->orWhere('email', 'LIKE', "%{$this->search}%")
        ->paginate($this->perPage)]);
    }
}
