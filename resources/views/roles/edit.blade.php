@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h4 class="section-heading">Editar Rol</h4>

            @include('partials.messages')
            <form action="{{route('admin.roles.update')}}" method="post" id="contactForm">
                @include('roles._form')
            </form>
        </div>
    </div>
@endsection

@section('scripts')


@endsection