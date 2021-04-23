@extends('back.layouts.master')
@section('content')
 <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Наши Партнеры</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                           
                                            <th>Изображений</th>
                                            <th>Имя Tm</th>
                                            <th>Имя Ru</th>
                                            <th>Имя En</th>
                                            
                                            
                                            <th>операции</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($ourparts as $ourpart)
                                        <tr>
                                        
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="" src="{{asset($ourpart->image)}}" alt=""></a>
                                                </div>
                                            </td>
                                             <td>{{$ourpart->title_tm}}</td>
                                             <td>{{$ourpart->title_ru}}</td>
                                             <td>{{$ourpart->title_en}}</td>
                                           
                                            <td>
                                                <span class="product">
                                                <a href="{{route('admin.ourpartners.edit',$ourpart->id)}}" title="Update" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square"></i></a>
                                                <a href="{{route('admin.ourpartners.delete',$ourpart->id)}}"  title="delete" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></span>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                               
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                   
                
               

                
                 
                


           

            

        </div>
    </div><!-- .animated -->
</div><!-- .content -->

@endsection