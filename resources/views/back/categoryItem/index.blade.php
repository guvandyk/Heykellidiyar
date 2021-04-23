@extends('back.layouts.master')
@section('content')
 <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Продукты Торговля</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            
                                            <th>Изображений</th>
                                            <th>Имя Tm</th>
                                            <th>Имя Ru</th>
                                            <th>Имя En</th>
                                            <th>Категория Slug</th>
                                            <th>Описание Tm</th>
                                            <th>Описание Ru</th>
                                            <th>Описание En</th>
                                            
                                            
                                            <th>операции</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($items as $item)
                                        <tr>
                                            
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="" src="{{asset($item->image)}}" alt=""></a>
                                                </div>
                                            </td>
                                             <td>{{$item->name_tm}}</td>
                                             <td>{{$item->name_ru}}</td>
                                             <td>{{$item->name_en}}</td>
                                             <td>{{$item->getCategory->slug}}</td>
                                             <td>{{ \Illuminate\Support\Str::limit($item->description_tm, 50) }}</td>
                                             <td>{{ \Illuminate\Support\Str::limit($item->description_ru, 50) }}</td>
                                             <td>{{ \Illuminate\Support\Str::limit($item->description_en, 50) }}</td>
                                             
                                            {{--  <td><input class="switch" item-id="{{$item->id}}" type="checkbox" data-on="aktiv" data-of="pasiv"
                                             data-toggle="toggle" data-onstyle="outline-primary" data-offstyle="outline-secondary" @if($item->status==1) checked @endif ></td> --}}
                                            <td>
                                                <span class="product">
                                                <a href="{{route('admin.categoryItem.edit',$item->id)}}" title="Update" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square"></i></a>
                                                <a href="{{route('admin.category.delete',$item->id)}}"  title="delete" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                                </span>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- {{$categories->links()}} --}}
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                  
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
 

@endsection