@extends('layouts.master')

@section('content')
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>Success !</strong> {{ session('success') }}
                    </div>
                    @endif
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-success mb-2" data-toggle="modal"
                            data-target="#addCategory">Ajouter</button>
                    </div>
                    @include('partials.popup.addCategory')

                    <div class="widget-content widget-content-area br-6">
                        <table id="zero-config" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nom des categories</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $categories as $categorie )
                                <tr>
                                
                                    <td>{{ $categorie->name }}</td>
                                    <td>
                                        <button><a data-toggle="modal"data-target="#updateCategory{{ $categorie->id }}">modifier</a> </button>
                                        <button><a data-toggle="modal"data-target="#deleteCategory{{ $categorie->id }}">supprimer</a> </button>
                                    </td>
                                </tr>
                                @include('partials.popup.updateCategory',['categoryId'=>$categorie->id])
                                @include('partials.popup.deleteCategory',['categoryId'=>$categorie->id])
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
