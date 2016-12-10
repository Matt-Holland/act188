<?php

namespace App\Http\Controllers;

use App\Disclosures\Disclosure;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class DisclosureController extends BaseController
{
    public function searchDisclosures(Request $request)
    {
        $query = $request->input('query');
        $disclosures = Disclosure::query()
            ->where('model', 'LIKE', "%$query%")
            ->orWhere('brand', 'LIKE', "%$query%")
            ->orWhere('manufacturer', 'LIKE', "%$query%")
            ->orWhere('chemical_name', 'LIKE', "%$query%")
            ->get()
            ->forPage($request->input('page'), $request->input('perPage'));

        return view('pages/frameTable', [
            'searchResults' => $disclosures->toArray(),
            'query' => $query
        ]);
    }

    public function showDisclosure(Disclosure $disclosure)
    {
        return view('pages/disclosure', [
            'disclosure' => $disclosure->toArray()
        ]);
    }
}
