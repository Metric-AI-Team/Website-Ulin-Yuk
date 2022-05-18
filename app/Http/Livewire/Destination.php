<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Auth;
use Livewire\WithPagination;
use App\Models\Destinations;

class Destination extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $destination_rating;
    public $destination_recommendation;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function clearform(){
        $this->destination_rating = '';
        $this->destination_recommendation = '';
    }

    public function createRating($destination_id){
        $destination_ratings = [
            'user_id' => Auth::user()->id,
            'destination_id' => $destination_id,
            'destination_rating' => $this->destination_rating,
            'destination_recommendation' => $this->destination_recommendation,
        ];

        DB::beginTransaction();
        DB::table('destination_ratings')
        ->insert($destination_ratings);
        DB::commit();
        $this->clearform();
        $this->alert('success', 'Berhasil Ditambah!', [
            'position' =>  'center',
            'timer' =>  3000,
            'toast' =>  false,
            'text' =>  '',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
      ]);
    }

    public function destroyRating($id){
        DB::table('destination_ratings')
        ->where('destination_rating_id', '=', $id)
        ->delete();

		$this->alert('success', 'Berhasil Dihapus!', [
                  'position' =>  'center',
                  'timer' =>  3000,
                  'toast' =>  false,
                  'text' =>  '',
                  'confirmButtonText' =>  'Ok',
                  'cancelButtonText' =>  'Cancel',
                  'showCancelButton' =>  false,
                  'showConfirmButton' =>  false,
            ]);
	}

    public function render()
    {
        return view('livewire.destination', [
            'destinations' => DB::table('destinations')
            ->leftJoin('destination_categories','destination_categories.destination_category_id','=','destinations.destination_category_id')
            ->where('destinations.destination_title','LIKE',"%".$this->search."%")->orwhere('destination_categories.destination_category_name','LIKE',"%".$this->search."%")
            ->paginate(12),
            'destination_categories' => DB::table('destination_categories')->get(),
            'destination_ratings' => DB::table('destination_ratings')
            ->leftJoin('users','users.id','=','destination_ratings.user_id')
            ->get(),
        ]);
    }
}
