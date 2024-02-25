<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;

class product_categories extends Controller
{
    //
   
    function the_categories(Request $request){
        $filename = '';
        if ($request->hasFile('categoryImage')) {
            $image = $request->file('categoryImage'); // Use 'productImage' instead of 'image'
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/assets/images/'), $filename);
            $filename = $request->getSchemeAndHttpHost() . '/assets/images/' . $filename;
        }
        $category = new category();
        $category->categoryName = $request->categoryName;
        $category->id = $request->id;
        $category->categoryImage = $filename;
        $category->save();
        return view('home');
    }
    function delete($id){
        $data = category::find($id);
        $data->delete();
        return view('home');
    }
}
