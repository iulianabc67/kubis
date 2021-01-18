<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $input = $request->all();

        $needle = $input['keyword'];

        $jsonFile = file_get_contents(storage_path("data.json"));
        $json = json_decode($jsonFile);

        $results = [];

        foreach ($json->data as $item) {
            if (strripos($item->name, $needle) !== false) {
                array_push($results, $item->sku);
            }
        }

        return view('search', ['results' => $results, 'json' => $json]);
    }
}
