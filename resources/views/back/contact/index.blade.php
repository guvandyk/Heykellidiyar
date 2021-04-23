@extends('back.layouts.master')
@section('content')
 <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Контакт</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                           
                                            <th>Телефон</th>
                                            <th>Email</th>
                                            <th>Факс</th>
                                            <th>Адрес_Tm</th>
                                            <th>Адрес_Ru</th>
                                            <th>Адрес_En</th>
                                            <th>улица_Tm</th>
                                            <th>улица_Ru</th>
                                            <th>улица_En</th>
                                            <th>операции</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($contacts as $contact)
                                        <tr>
                                            
                                            <td class="avatar">
                                                {{$contact->phone}}
                                            </td>
                                             <td>{{$contact->email}}</td>
                                             <td>{{$contact->fax}}</td>
                                             <td>{{$contact->adres}}</td>
                                             <td>{{$contact->adres_ru}}</td>
                                             <td>{{$contact->adres_en}}</td>
                                             <td>{{$contact->adres_koce}}</td>
                                             <td>{{$contact->adres_koce_ru}}</td>
                                             <td>{{$contact->adres_koce_en}}</td>
                                            <td>
                                                <span class="product">
                                                <a href="{{route('admin.contact.edit',$contact->id)}}" title="Update" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square"></i></a>
                                                <a href="{{route('admin.contact.delete',$contact->id)}}"  title="delete" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></span>
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