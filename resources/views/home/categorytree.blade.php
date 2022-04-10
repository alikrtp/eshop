@foreach($children as $subcategory)
<div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
@if(count($subcategory->children))
<a href="{{route('categoryproduct',['id'=>$subcategory->id])}}" class="nav-link" data-toggle="dropdown">{{$subcategory->title}} <i class="fa fa-angle-down float-right mt-1"></i></a>
    @include('home.categorytree',['children'=>$subcategory->children])

@else
<a href="{{route('categoryproduct',['id'=>$subcategory->id])}}" class="nav-link" data-toggle="dropdown">{{$subcategory->title}} <i class="fa fa-angle-down float-right mt-1"></i></a>

@endif

</div>
@endforeach
