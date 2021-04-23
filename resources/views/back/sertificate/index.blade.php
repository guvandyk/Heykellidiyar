@extends('back.layouts.master')
@section('content')
 <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Сертификаты</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            
                                            <th class="avatar">Изображений</th>
                                            <th>Имя_Tm</th>
                                            <th>Имя_Ru</th>
                                            <th>Имя_En</th>
                                  
                                            <th>операции</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($sertificates as $sertificate)
                                        <tr>
                                           
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{asset($sertificate->image)}}" alt=""></a>
                                                </div>
                                            </td>
                                             <td class="serial">{{$sertificate->title_tm}}</td>
                                             <td class="serial">{{$sertificate->title}}</td>
                                             <td class="serial">{{$sertificate->title_en}}</td>
                                            <td>
                                                <span class="product">
                                                <a href="{{route('admin.sertificate.edit',$sertificate->id)}}" title="Update" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square"></i></a>
                                                <a href="{{route('admin.sertificate.delete',$sertificate->id)}}"  title="delete" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></span>
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