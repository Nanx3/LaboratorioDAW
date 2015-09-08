{!!Form::open(['route'=>['admin.users.destroy',$user->id],'method'=>'DELETE'])!!}
<button type="submit" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger">Eliminar</button>
{!! Form::close() !!}