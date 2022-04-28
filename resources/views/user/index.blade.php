@extends('layouts.app_admin')

@section('title','Usuarios')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('User') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Usuario') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table is-striped hover" style="width:100%">
                                <thead class="thead">
                                    <tr align="center">
                                        
										<th scope="col">Name</th>
										<th scope="col">Tipo</th>
										<th scope="col">Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>                                            
											<td>{{ $user->name }}</td>
											<td>{{ $user->tipo }}</td>
											<td>{{ $user->email }}</td>

                                            <td align="center">
                                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                    
                                                    <a 
                                                        @if ( Auth::user()->tipo == 'Colaborador')
                                                            class="btn btn-sm btn-success disabled"  
                                                        @else
                                                            class="btn btn-sm btn-success" 
                                                        @endif
                                                        href="{{ route('users.edit',$user->id) }}"> <i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                        @if ( Auth::user()->id == $user->id)
                                                            disabled  
                                                        @endif 
                                                        onclick="return confirm('¿Estas seguro de eliminar este usuario?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection
