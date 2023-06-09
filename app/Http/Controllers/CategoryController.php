<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('category',compact('categories'));
    }
    public function updateCategory(Request $request ,$CategoryId){
    
        $data=$request->all();
        $category = Category::find($CategoryId);
        $nom = $data['nomCategory'];
        $category->name = $nom; 
        $category->save();
        return redirect()->back()->with('success', "votre produit à éte Modifier avec success");
        }

        public function store(Request $request){
            $idUser = Auth::id();
            $data= $request->all();
            Category::create(
                [
                'name' => $data['nomCategory'],
                'user_id'=>$idUser
                ]);
                return redirect()->back()->with('success', 'Category à éte crée avec success');
        }

        public function destroy($CategoryId)
        {
            $category= Category::find($CategoryId);
            $category->delete();
            return redirect()->back()->with('success', "category à éte supprimé avec success");
        }
}
