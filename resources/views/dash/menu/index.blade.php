@extends("theme.ubold.admin.layout")
@section("titulo")
Menú
@endsection

@section("styles")

@endsection

@section("scriptsPlugins")


@endsection

@section("scripts")
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        
        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="header-title">Administración de Menús</h4>
                                                <p class="sub-header">
                                                    Crea nuevos menús y elige menú principal
                                                </p>

                                                @csrf
                                                <div class="custom-dd dd" id="nestable_list_1">
                                                    <ol class="dd-list">
                                                        @foreach ($menus as $key => $item)
                                                            @if ($item["menu_id"] != 0)
                                                                @break
                                                            @endif
                                                            @include("dash.menu.menu-item",["item" => $item]) 
                                                        @endforeach
                                                    </ol>
                                                </div>

                                            </div><!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
        </div>
    </div>
</div>
@endsection
