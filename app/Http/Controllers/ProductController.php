<?php

namespace App\Http\Controllers;

use App\Products\Disclosure;
use App\Products\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    public function searchProducts(Request $request)
    {
        $search = $request->input('query');
        $products = Product::query()
            ->where('gtin', 'LIKE', "%$search%")
            ->orWhere('model', 'LIKE', "%$search%")
            ->orWhere('brand', 'LIKE', "%$search%")
            ->orWhere('manufacturer', 'LIKE', "%$search%")
            ->orWhereHas('disclosures', function (Builder $query) use ($search) {
                $query->where('chemical_name', 'LIKE', "%$search%");
            })
            ->get()
            ->forPage($request->input('page'), $request->input('perPage'));

        return view('pages/frameTable', [
            'searchResults' => $products->toArray(),
            'query' => $search
        ]);
    }

    public function showProduct(Product $product)
    {
        return view('pages/product', [
            'product' => $product->toArray()
        ]);
    }
}
