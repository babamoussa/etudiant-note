@extends("layouts.app");

@section("content")
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">N°</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            @foreach ( $etudiants as $etudiant )
                <tbody>
                <tr>
                    <th scope="row">{{$etudiant->id}}</th>
                    <td>{{$etudiant->name}}</td>
                    <td>{{$etudiant->email}}</td>
                    <td>
                        <button class="btn btn btn-primary">Voir</button>
                        <button class="btn btn-secondary">Editer</button>
                        <button class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>
                </tbody>
            @endforeach
          </table>
    </div>
@endsection