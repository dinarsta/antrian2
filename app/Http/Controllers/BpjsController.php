<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bpjs;
use App\Models\Poly;
use App\Models\Dokter;

class BpjsController extends Controller
{
    public function viewHome()
    {
        return view('home');
    }

    public function index()
    {
        $data = Bpjs::all();
        // dd($data);

        return view('tampilbpjs', compact('data'));
    }

    public function checkBpjs(Request $request)
    {
        // Your logic to check the BPJS number and fetch data from the database
        $bpjsNumber = $request->input('nomor_bpjs');
        $patientData = Bpjs::where('no_bpjs', $bpjsNumber)->first();

        if ($patientData) {
            // If patient data is found, return a response with the data
            return response()->json(['patientData' => $patientData]);
        } else {
            // If no data is found, return a response indicating that
            return response()->json(['message' => 'Patient data not found']);
        }
    }

    public function showSelectForm(Request $request)
    {
        $bpjsEntries = Bpjs::all();
        $polies = Poly::all();
        $dokters = Dokter::all();
    
        // Get the 'id' parameter from the URL
        $bpjsEntryId = $request->input('id');
    
        // Fetch the corresponding Bpjs entry from the database
        $bpjsEntry = Bpjs::find($bpjsEntryId);
    
        return view('select', compact('bpjsEntries', 'polies', 'dokters', 'bpjsEntry'));
    }
    



 
    public function handleSelection(Request $request, $id)
    {
        // Validate the form data as needed
        $request->validate([
            'selected_poli' => 'required|exists:polies,id',
            'selected_dokter' => 'required|exists:dokters,id',
        ]);
    
        // Find the BPJS entry by ID
        $bpjsEntry = Bpjs::find($id);
    
        // Update the selected poly and dokter for the BPJS entry
        $bpjsEntry->selected_poly_id = $request->input('selected_poli');
        $bpjsEntry->selected_dokter_id = $request->input('selected_dokter');
    
        // Save the changes
        $bpjsEntry->save();
    
        return redirect()->back()->with('success', 'Pilihan berhasil disimpan');
    }


    
    public function print($id)
    {
        // Fetch the data based on the provided $id
        $bpjsEntry = Bpjs::find($id); // Replace with your actual model
    
        // Return the view with the data
        return view('print', ['bpjsEntry' => $bpjsEntry]);
    }
    
    

}
