<?php

namespace Modules\LandingPage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use App\Helpers\ResponseFormatterHelper;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Auth;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('landingpage::index');
    }

    public function dashboard()
    {
        return view('landingpage::dashboard');
    }

    public function about()
    {
        return view('landingpage::about');
    }

    public function profile()
    {
        return view('landingpage::profile', [
            'profile' => DB::table('users')
            ->where('id', Auth::user()->id)->first(),
        ]);
    }

    public function config()
    {
        return view('landingpage::configuration', [
            'config' => DB::table('configurations')
            ->where('id', 1)->first(),
        ]);
    }

    public function topup()
    {
        return view('landingpage::topup', [
            'profile' => DB::table('users')
            ->where('id', Auth::user()->id)->first(),
        ]);
    }

    public function destination()
    {
        return view('landingpage::destination');
    }

    public function culinary()
    {
        return view('landingpage::culinary');
    }

    public function team()
    {
        return view('landingpage::team');
    }

    public function testimonial()
    {
        return view('landingpage::testimonial');
    }

    public function contact()
    {
        return view('landingpage::contact');
    }

    public function game_cat()
    {
        return view('landingpage::game_cat');
    }

    public function game_cross()
    {
        return view('landingpage::game_cross');
    }

    public function chatbot()
    {
        return view('landingpage::chatbot', [
            'config' => DB::table('configurations')
            ->where('id', 1)->first(),
        ]);
    }

    public function update_profile(Request $request){
        DB::table('users')->where('id', Auth::user()->id)->update([
			'name' => $request->name,
			'email' => $request->email,
			'image_link' => $request->image_link,
            'phone' => $request->phone,
            'place_of_birth' => $request->place_of_birth,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'saldo' => $request->saldo,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
		]);
        return redirect('profile');
    }

    public function update_config(Request $request){
        DB::table('configurations')->where('id', 1)->update([
			'config_key' => $request->config_key,
			'config_value' => $request->config_value,
		]);
        return redirect('config');
    }

    public function update_saldo(Request $request){
        DB::table('users')->where('id', Auth::user()->id)->update([
			'name' => $request->name,
			'email' => $request->email,
			'image_link' => $request->image_link,
            'phone' => $request->phone,
            'place_of_birth' => $request->place_of_birth,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'saldo' => $request->saldo,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
		]);
        return redirect('profile');
    }

    public function rating()
    {
        $getrating = DB::table('destination_ratings')
            ->leftJoin('users','users.id','=','destination_ratings.user_id')
            ->leftJoin('destinations','destinations.destination_id','=','destination_ratings.destination_id')
            ->leftJoin('destination_categories','destination_categories.destination_category_id','=','destinations.destination_category_id')
            ->get();

        try {
            if ($getrating == null)
                return ResponseFormatterHelper::successResponse(null, 'Data null');
            else if ($getrating)
                return ResponseFormatterHelper::successResponse($getrating, 'Berhasil menampilkan data destinasi');
            else
                return ResponseFormatterHelper::errorResponse(null, 'Tidak ada data');
        } catch (\Throwable $th) {

            return ResponseFormatterHelper::errorResponse(null, $th);
        }

    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('landingpage::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('landingpage::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('landingpage::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
