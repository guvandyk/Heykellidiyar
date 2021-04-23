@extends('back.layouts.master')
@section('content')
 <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Тоговля Категории</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            
                                            <th>Изображений</th>
                                            <th>Slug</th>
                                            <th>Имя Tm</th>
                                            <th>Имя Ru</th>
                                            <th>Имя En</th>
                                            <th>Описание Tm</th>
                                            <th>Описание Ru</th>
                                            <th>Описание En</th>
                                            
                                            <th>операции</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($categories as $category)
                                        <tr>
                                            
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="" src="{{asset($category->image)}}" alt=""></a>
                                                </div>
                                            </td>
                                             <td>{{$category->slug}}</td>
                                             <td>{{$category->name_tm}}</td>
                                             <td>{{$category->name_ru}}</td>
                                             <td>{{$category->name_en}}</td>
                                             <td>{{ \Illuminate\Support\Str::limit($category->description_tm, 50) }}</td>
                                             <td>{{ \Illuminate\Support\Str::limit($category->description_ru, 50) }}</td>
                                             <td>{{ \Illuminate\Support\Str::limit($category->description_en, 50) }}</td>
                                            
                                             
                                            <td>
                                                <span class="product">
                                                <a href="{{route('admin.category.edit',$category->id)}}" title="Update" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square"></i></a>
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