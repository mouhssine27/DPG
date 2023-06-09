<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ProduitController extends Controller
{
    public function index(){
        $produits = Produit::all();
        $categories = Category::all();
        return view('produit', compact('produits','categories'));
    }

    public function updateProduit(Request $request ,$ProduitId){
    
        $data=$request->all();
        $produit = Produit::find($ProduitId);
        $nom = $data['nomProduit'] ;
        $produit->nom = $nom; 
        $produit->stock = $data['stock'];  
        $produit->category_id = $data['category'];  
        $produit->save();
        return redirect()->back()->with('success', "votre produit à éte Modifier avec success");
        }

        public function store(Request $request){
            $idUser = Auth::id();
            $data= $request->all();
            $category = $data['category'];

            Produit::create(
                [
                'nom' => $data['nomProduit'],
                'slug'=>Str::slug($data['nomProduit']),
                'stock' => $data['stock'],
                'user_id'=> $idUser,
                'category_id'=> $category,

                ]);

              
            
                return redirect()->back()->with('success', 'Category à éte crée avec success');
        }


     public function destroy($produitId)
    {
        $produit= Produit::find($produitId);
        $produit->delete();
        return redirect()->back()->with('success', "produit à éte supprimé avec success");
    }

}
