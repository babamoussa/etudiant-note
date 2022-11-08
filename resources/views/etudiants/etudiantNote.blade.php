@extends("layouts.app")

@section("content")
    <div class="container">
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                
                <th scope="col">Matieres</th>
                <th scope="col">Interrogation n°1</th>
                <th scope="col">Interrogation n°2</th>
                <th scope="col">Devoir</th>
                <th scope="col">Moyenne</th>
              </tr>
            </thead>
            
            <tbody>
                @foreach ( $userAuth->matieres as $matiere ) 
                        <tr>
                            
                            <td>{{$matiere->nom}}</td>
                            <td>{{$interro1 = $matiere->notes->implode("interro1")}}</td>
                            <td>{{$interro2 = $matiere->notes->implode("interro2")}}</td>
                            <td>{{$devoir = $matiere->notes->implode("devoir")}}</td>
                            <td>{{($interro1+$interro2+$devoir*2)/4}}</td>
                        </tr>        
                @endforeach 
            </tbody>
          </table>
    </div>
@endsection