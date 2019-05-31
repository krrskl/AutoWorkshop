<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ReceiptSheet;
use App\Vehicle;

class ReceiptSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return response()->json(['status' => 'true', 'message' => 'Hojas de recepción.', 'data' => ReceiptSheet::fullinfo()->get()]);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'false', 'message' => 'Ha ocurrido un error.']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Vehicle::where('id', $request->vehicleId)->first()->update(['repairing' => true]);
            ReceiptSheet::create($request->all());
            return response()->json(['status' => 'true', 'message' => 'Creación correcta.']);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'false', 'message' => 'Ha ocurrido un error.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            ReceiptSheet::where('id', $request->id)->first()->update($request->all());
            return response()->json(['status' => 'true', 'message' => 'Edición correcta.']);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'false', 'message' => 'Ha ocurrido un error.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
