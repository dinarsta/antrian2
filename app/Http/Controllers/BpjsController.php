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


    public function handleSelection(Request $request)
    {
        // Validate the form data
        $request->validate([
            'selected_poly_id' => 'required',
            'selected_dokter_id' => 'required',
        ]);

        // Retrieve data from the validated request
        $selectedPoli = $request->input('selected_poly_id');
        $selectedDokter = $request->input('selected_dokter_id');

        // Assuming you have a Bpjs model instance based on the 'no_bpjs'
        $bpjsEntry = Bpjs::where('no_bpjs', $request->input('no_bpjs'))->first();

        if ($bpjsEntry) {
            // Update the selected_poly_id and selected_dokter_id fields
            $bpjsEntry->selected_poly_id = $selectedPoli;
            $bpjsEntry->selected_dokter_id = $selectedDokter;
            $bpjsEntry->save();
        } else {
            // Handle the case when the Bpjs entry is not found
            // You may want to add some error handling or redirection here
        }

        // Redirect to a success page or back to the form
        return redirect()->route('select')->with('success', 'Data saved successfully.');
    }
   

    

    


    
    public function print($id)
    {
        $bpjsEntry = Bpjs::find($id);
    
        if (!$bpjsEntry) {
            // Handle the case where the BPJS entry with the given $id is not found
            abort(404);
        }
    
        return view('print', compact('bpjsEntry'));
    }

}
