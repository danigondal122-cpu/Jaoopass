<?php

namespace App\Http\Controllers\Admin;

use App\Models\Barcode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QrcodeController extends Controller
{

    public function download($card_number)
    {
        // Define the high-resolution barcode URL with dpi=1200
        $barcode_url = "https://barcode.tec-it.com/barcode.ashx?data={$card_number}&code=Code128&dpi=300";

        // Get the barcode image as binary data
        $barcode_image = file_get_contents($barcode_url);

        // Set headers to force the browser to download the image as a PNG
        return response($barcode_image)
            ->header('Content-Type', 'image/png')
            ->header('Content-Disposition', 'attachment; filename="barcode_' . $card_number . '.png"');
    }

    
 // Edit method to fetch barcode for editing
 public function edit($id)
 {
     $barcode = Barcode::findOrFail($id);  // Find the barcode by ID
     return view('admin.qr.edit', compact('barcode'));
 }

 // Update method to update the barcode details
 public function update(Request $request, $id)
 {
     // Validate the input
     $validated = $request->validate([
         'advance' => 'required|numeric|min:1',
         'status' => 'required|in:active,inactive',  // Only allow "active" or "inactive"
     ]);

     // Find the barcode and update
     $barcode = Barcode::findOrFail($id);
     $barcode->update([
         'advance' => $validated['advance'],
         'status' => $validated['status'],
     ]);

     // Redirect back to the barcode list with a success message
     return redirect()->route('barcode.index')->with('success', 'Barcode updated successfully!');
 }

 // Delete method (if needed)
 public function destroy($id)
 {
     $barcode = Barcode::findOrFail($id);
     $barcode->delete();

     return redirect()->route('barcode.index')->with('success', 'Barcode deleted successfully!');
 }

 public function toggleStatus($id)
{
    // Find the barcode by ID
    $barcode = Barcode::findOrFail($id);

    // Toggle the status
    $barcode->status = ($barcode->status == 'active') ? 'inactive' : 'active';

    // Save the updated status
    $barcode->save();

    // Redirect back with success message
    return redirect()->route('barcode.index')->with('success', 'Barcode status updated successfully!');
}


    public function create()
    {
        return view('admin.qr.create');  
    }
    public function index()
    {
        // Fetch all barcodes from the database without pagination
        $barcodes = Barcode::all(); // No pagination, fetching all barcodes

        // Pass the barcodes to the view
        return view('admin.qr.index', compact('barcodes'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
            'advance_amount' => 'required|numeric|min:1',
        ]);
    
        $quantity = $validated['quantity'];
        $advanceAmount = $validated['advance_amount'];
    
        // Loop to generate barcodes
        for ($i = 1; $i <= $quantity; $i++) {
            // Generate a unique card number
            do {
                $cardNumber = $this->generateUniqueCardNumber(); // Generate the 13-digit card number
            } while (Barcode::where('card_number', $cardNumber)->exists()); // Check if card number already exists
    
            // Save the barcode to the database
            Barcode::create([
                'card_number' => $cardNumber,
                'advance' => $advanceAmount,
                'balance' => $advanceAmount,
                'status' => 'active',
            ]);
        }
    
        return redirect()->route('barcode.index')->with('success', 'Barcodes generated successfully!');
    }
    
    // Function to generate a unique 13-digit card number
    private function generateUniqueCardNumber()
    {
        // Generate a random 13-digit number
        $cardNumber = mt_rand(1000000000, 9999999999); // 13-digit number
    
        return $cardNumber;
    }
    
    

    

}
