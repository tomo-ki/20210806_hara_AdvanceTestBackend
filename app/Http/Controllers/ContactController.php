<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return response()->json([
            'data' => $contacts
        ], 200);
    }
    public function store(Request $request)
    {
        $contact = Contact::create($request->all());
        return response()->json([
            'data' => $contact
        ], 201);
    }
    public function destroy(Contact $contact)
    {
        $item = Contact::where('id', $contact->id)->delete();
        if ($item) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
