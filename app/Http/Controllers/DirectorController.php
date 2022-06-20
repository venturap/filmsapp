<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\Http\Requests\UpdateDirectorRequest;
use App\Models\Director;
use Illuminate\Support\Facades\Validator;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO: Implement index() method.
        return response()->json(Director::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    //public function store(Request $request)
    public function store(Request $request)
    {

        $validated_request = $request->validate(
            [
                'name' => 'required',
                'surname' => 'required',
                'birth_date' => 'required',
                'country' => 'required',
            ]
        );

        if ($validated_request) {
            $director = Director::create($validated_request);
            return response()->json($director, 201);
        }
        return response()->json(['error' => 'Invalid request'], 400);

        //$director = Director::create($request->all());

        /*

            $director = new Director();
            $director->name = $request->name;
            $director->surname = $request->surname;
            $director->country = $request->country;
            $director->birth_date = $request->birth_date;
            $director->save();

        */

        //return response()->json($director,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Director $director)
    {
        return response()->json($director);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDirectorRequest  $request
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateDirectorRequest $request, Director $director)
    {
        return response()->json($director->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {

        if($director->films->count() > 0){
            return response()->json(['error' => 'Director has films'],400);
        }

        return response()->json($director->delete(), 204);
    }
}
