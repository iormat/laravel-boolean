<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postcard;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index() {
    //     return view('home');
    // }

    public function createPostcard() {
        return view('pages.createPostcard');
    }

    public function storePostcard(Request $request) {
        $data = $request -> validate([
            'sender' => 'required|string|max:60',
            'address' => 'required|string|max:255',
            'text' => 'required|string',
            'image' => 'nullable|mimes:jpeg,bmp,png'
        ]);
        // save and rename user image
        if($data['image']) {
            $imageFile = $data['image'];

            $imageName = rand(1000000, 9999999) . '_' . time()
                        . '.' . $imageFile -> getClientOriginalExtension();
            $imageFile -> storeAs('/assets/img/postcards/', $imageName, 'public');

            $data['image'] = $imageName;
        }

        $data = Postcard::create($data);

        return redirect() -> route('index');
    }
}
