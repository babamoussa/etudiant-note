@extends("layouts.app")

@section("content")
@if (session("message"))
  <h2 class="alert alert->success">{{session("message")}}</h2>
@endif
<div class="container">
  <h1>Affectation de note</h1>
  <form action="{{url("insertionNote")}}" method="POST" enctype="multipart/form-data">
    @csrf
    <fieldset>
      <legend>Affecter une note a un étudiant</legend>
       <div class="form-group">
        <label for="email">Entrez le mail de l'étudiant</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="nablson.design@gmail.com">
       </div>         
      <div class="form-group">
        <label for="matiere">Entrez la matiere</label>
        <select name="matiere_id" id="matiere" class="form-control">
          <option value="">Liste des matieres...</option>
          @foreach ( $users as $user )
            <option value="{{$user->matieres->implode("id")}}">{{ $user->matieres->implode("nom");}}</option>
          @endforeach
        </select>
        <div class="form-group">
          <label for="note1">Entrez la note n°1</label>
          <input name="note1" type="number" min="1" max="20" class="form-control" id="note1" placeholder="Ex: 12">
         </div>
         <div class="form-group">
          <label for="note2">Entrez la note n°2</label>
          <input name="note2" type="number" min="1" max="20" class="form-control" id="note2" placeholder="Ex: 16">
         </div>   
         <div class="form-group">
          <label for="devoir">devoir</label>
          <input name="devoir" type="number" min="1" max="20" class="form-control" id="devoir" placeholder="Ex: 14">
         </div>
         <div>
          <input type="submit" value="Envoyer" class="btn btn-primary mt-3 float-end">
         </div>
      </div>
    </fieldset>
  </form>
</div>
</body>
@endsection