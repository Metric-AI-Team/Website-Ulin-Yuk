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

class Culinary extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.culinary', [
            'culinaries' => DB::table('culinaries')
            ->leftJoin('culinary_categories','culinary_categories.culinary_category_id','=','culinaries.culinary_category_id')
            ->where('culinaries.culinary_title','LIKE',"%".$this->search."%")->orwhere('culinary_categories.culinary_category_name','LIKE',"%".$this->search."%")
            ->paginate(9),
            'culinary_categories' => DB::table('culinary_categories')->get(),
        ]);
    }
}
