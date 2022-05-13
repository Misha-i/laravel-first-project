<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use Illuminate\Pagination\Paginator;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Paginator::useBootstrap();
        return view('newProject.car', ['cars' => Car::paginate()]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $car = new Car();
        $contacts = Contact::all();
        return view('newProject.create', ['cars' => $car, 'contacts' => $contacts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
       /* $car = new Car();
        return view('newProject.create', ['data' => $car->find($id)]);*/
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {

    }

    public function submit(CarRequest $request) {
        $car = new Car();
        $car->car=$request->input('name');
        $car->contact_id=$request->input('contact_id');
        $car->save();
        return redirect()->route('table')->with('success', 'Повідомлення було відправленно');
    }

    public function showOneCar($id) {
        $car = Car::where('id', $id)->first();
        return view('newProject.one-message', ['data' => $car]);
    }

    public function updateMessage($id) {
        $car = new Car();
        $car = Car::where('id', $id)->first();
        $contacts = Contact::all();
        return view('newProject.update-message', ['car' => $car, 'contacts' => $contacts]);
    }

    public function updateMessageSubmit($id, CarRequest $request) {
        $car = Car::find($id);
        $car->car=$request->input('name');
        $car->contact_id=$request->input('contact_id');
        $car->save();

        return redirect()->route('car-all', $id)->with('success', 'Повідомлення було оновленно');
    }

    public function deleteMessageSubmit($id){
        Car::find($id)->delete();
        return redirect()->route('table')->with('success', 'Повідомлення було видалено');
    }

}
