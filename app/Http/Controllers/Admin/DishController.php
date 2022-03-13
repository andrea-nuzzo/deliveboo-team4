<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dish;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DishController extends Controller
{

    protected $validation = [
        "name" => "required|string|max:255",
        "ingredients" => "required|string|max:255",
        "description" => "nullable|string",
        "price" => "required|numeric|gte:0",
        "visible" => "sometimes|accepted",
        "image" => "nullable|image|max:2048",
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Prendo l'id dell'utente loggato
        $idLog = Auth::id();

        // Recupero tutti i dati dell'utente loggato
        $user = DB::table('users')->where('id', '=', $idLog)->first();

        $dishes = Dish::all();

        return view('admin.dishes.index', compact('dishes', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validation);

        $data = $request->all();

        $newDish = new Dish();
        $newDish->name = $data['name'];
        $newDish->ingredients = $data['ingredients'];
        $newDish->description = $data['description'];
        $newDish->price = $data['price'];
        $newDish->visible = isset($data['visible']);
        
        if(isset($data['image'])){
            $path_image = Storage::put("uploads", $data["image"]);
            $newDish->image = $path_image;
        }

        $newDish->user_id = Auth::id();

        $newDish->save();

        return redirect()->route('dishes.show', $newDish->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        return view("admin.dishes.show", compact("dish"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        return view("admin.dishes.edit", compact("dish"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $request->validate($this->validation);

        $data = $request->all();

        $dish->name = $data['name'];
        $dish->ingredients = $data['ingredients'];
        $dish->description = $data['description'];
        $dish->price = $data['price'];
        $dish->visible = isset($data['visible']);
        
        if(isset($data['image'])){
            Storage::delete($dish->image);
            $path_image = Storage::put("uploads", $data["image"]);
            $dish->image = $path_image;
        }

        // $dish->user_id = Auth::id();

        $dish->save();

        return redirect()->route('dishes.show', $dish->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        if($dish->image){
            Storage::delete($dish->image);
        }

        $dish->delete();

        return redirect()->route('dishes.index');
    }
}
