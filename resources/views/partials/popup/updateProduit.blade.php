<div class="modal fade" id="updateProduit{{ $produit->id }}" tabindex="-1" role="dialog" aria-labelledby="EntrepriseLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier Produit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="{{ route('UpdateProduit',$produit->id ) }}">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" placeholder="Nom" name="nomProduit" value="{{ $produit->nom }}">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control" placeholder="saisir votre stock" name="stock" value="{{ $produit->stock }}">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="col form-control" id="category" name="category">
                            @foreach ($categories as $categorie )
                            <option value="{{ $categorie->id }}" @if($produit->category_id == $categorie->id) selected @endif>{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>