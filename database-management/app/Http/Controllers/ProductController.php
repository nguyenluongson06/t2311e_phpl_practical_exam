<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function display_product()
    {
        $products = Product::all()->toArray();
        return view("home", compact("products"));
    }

    public function add_new_product(Request $request)
    {
        try {
            $product_type = $request->get("ProductType");
            $product_code = $request->get("ProductCode");
            $product_name = $request->input("ProductName");
            $quantity = $request->get("Quantity");
            $note = $request->get("Note");
            $new_product = Product::create(
                array(
                    "ProductType" => $product_type,
                    "ProductCode" => $product_code,
                    "ProductName" => $product_name,
                    "Quantity" => $quantity,
                    "Note" => $note
                )
            );
            //$products = Product::all()->toArray();
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }

    }

    public function product($product_id)
    {
        try {
            $product = Product::findOrFail($product_id);
            return view("product", compact("product"));
        } catch (\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }

    }

    public function edit_product(Request $request, $product_id)
    {
        try {
            $product = Product::findOrFail($product_id);
            $product_type = $request->get("product_type");
            $product_code = $request->get("product_code");
            $product_name = $request->get("product_name");
            $quantity = $request->get("quantity");
            $note = $request->get("note");
            Product::where("Id", $product_id)->update(
                [
                    "ProductType" => $product_type,
                    "ProductCode" => $product_code,
                    "ProductName" => $product_name,
                    "Quantity" => $quantity,
                    "Note" => $note
                ]
            );
            $products = Product::all()->toArray();
            return view("home", compact("products"));
        } catch (\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }

    }
}