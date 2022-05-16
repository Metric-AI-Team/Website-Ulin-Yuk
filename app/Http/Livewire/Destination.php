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

class Destination extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $destination_id;
	public $destination_category_id;
	public $destination_device_code;
	public $destination_title;
	public $destination_image;
	public $destination_latitude;
    public $destination_longitude;
	public $destination_description_first;
	public $destination_description_second;
	public $destination_price;
    public $destination_status;
    public $destination_rating;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function detailData($id){
		$destinasik = Destinasi::where('id',$id)->first();
		$this->ids = $destinasik->id;
		$this->destination_id = $destinasik->destination_id;
		$this->destination_category_id = $destinasik->destination_category_id;
		$this->destination_device_code = $destinasik->destination_device_code;
		$this->destination_title = $destinasik->destination_title;
		$this->destination_image = $destinasik->destination_image;
		$this->destination_latitude = $destinasik->destination_latitude;
        $this->destination_longitude = $destinasik->destination_longitude;
		$this->destination_description_first = $destinasik->destination_description_first;
		$this->destination_description_second = $destinasik->destination_description_second;
		$this->destination_price = $destinasik->destination_price;
        $this->destination_status = $destinasik->destination_status;
        $this->destination_rating = $destinasik->destination_rating;
	}

    public function render()
    {
        return view('livewire.destination', [
            'destinations' => DB::table('destinations')
            ->leftJoin('destination_categories','destination_categories.destination_category_id','=','destinations.destination_category_id')
            ->where('destinations.destination_title','LIKE',"%".$this->search."%")->orwhere('destination_categories.destination_category_name','LIKE',"%".$this->search."%")
            ->paginate(12),
            'destination_categories' => DB::table('destination_categories')->get(),
        ]);
    }
}
