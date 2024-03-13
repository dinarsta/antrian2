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
            'no_bpjs' => 'required', // Add other validation rules as needed
            'selected_poli' => 'required',
            'selected_dokter' => 'required',
            'norm' => 'required', // Add validation rule for 'norm' if needed
            // Add other validation rules as needed
        ]);
    
        // Retrieve data from the validated request
        $noBpjs = $request->input('no_bpjs');
        $selectedPoli = $request->input('selected_poli');
        $selectedDokter = $request->input('selected_dokter');
        $norm = $request->input('norm');
    
        // Save data to the database
        Bpjs::create([
            'no_bpjs' => $noBpjs,
            'norm' => $norm,
            'selected_poly_id' => $selectedPoli,
            'selected_dokter_id' => $selectedDokter,
            // Add other fields as needed
        ]);
    }    
    
    

}
