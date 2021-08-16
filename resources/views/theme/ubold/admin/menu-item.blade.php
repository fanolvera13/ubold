@if ($item["submenu"] == [])
    <li class="nav-item">
       
        <a href="javascript:;" class="nav-link" title="{{$item["nombre"]}}">
          <i data-feather="home"></i>
        </a>
    </li>
@else
    <li class="nav-item has-treeview">



        <a href="javascript:;" class="nav-link" title="{{$item["nombre"]}}">
          <i data-feather="home"></i>
          
        </a>
        <ul class="nav nav-treeview">
            @foreach ($item["submenu"] as $submenu)
                @include("theme.ubold.admin.menu-item", ["item" => $submenu])
            @endforeach
        </ul>
    </li>
@endif
