<?php

namespace App\Http\Controllers;

use App\Models\Kosar;
use Illuminate\Http\Request;

class KosarController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function kosarLista() {
        return Kosar::all();
    }
}
