@extends('produit::layouts.app')
@section('contenu')
    
<div class="container"><br><br>
    <div class="align-right">
        <a href="{{route('categorie_create')}}" class="btn btn-primary right">Ajouter categorie</a><br><br>
    </div>
        @if ($categories->count() > 0)            
        <table class="table">
            <thead class="thead">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <input type="hidden" value="  {{$n=0}}">
                @foreach ($categories as $item)
                <input type="hidden" value="  {{$n++}}">
                <tr class="thead">
                    
                    <td>{{$n}}</td>
                    <td>{{$item->titre}}</td>
                    <td><a name="" id="" class="btn btn-primary" href="{{route('categorie_edit', $item->id)}}" role="button">Editer</a> <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$item->id}})" 
                        data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash"></i> Supprimer</a>
                 </td>
                    
                        
                </tr>
                @endforeach
                
                
            </tbody>
        </table>
        {{ $categories->links() }}
        @else
        <span>Aucune catégorie disponible</span>
        @endif
        
    </div>

    
    <div id="DeleteModal" class="modal fade text-danger" role="dialog">
        <div class="modal-dialog ">
          <!-- Modal content-->
        <form action="" id="deleteForm" method="post">
              <div class="modal-content">
                  <div class="modal-header bg-danger">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title text-center">CONFIRMATION DE LA SUPPRESSION</h4>
                  </div>
                  <div class="modal-body">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <p class="text-center">Etes vous sûr de vouloir suprimer ?</p>
                  </div>
                  <div class="modal-footer">
                      <b class="confirme">
                          <button type="button" class="btn btn-success left" data-dismiss="modal">Annuler</button>
                          <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Oui, Supprimer !</button>
                      </b>
                  </div>
              </div>
          </form>
        </div>
       </div>
       
       <script type="text/javascript">
        function deleteData(id)
        {
            var id = id;
            var url = '{{ route("categorie_delete", ":id") }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }
   
        function formSubmit()
        {
            $("#deleteForm").submit();
        }
     </script>
    @endsection
