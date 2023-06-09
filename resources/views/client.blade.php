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
                            data-target="#addProduit">Ajouter</button>
                    </div>
                    <div class="widget-content widget-content-area br-6">
                        <table id="zero-config" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                             
                                <tr>
                                    <td>{{ $user->name }}</td>
                                 
                                    <td>{{ $user->email }}</td>
                                    
                                    <td>{{ $user->phone }}</td>
                                   
                                    <td>{{ $user->adresse }}</td>
                                  
                                  
                                </tr>
                            
                            
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
