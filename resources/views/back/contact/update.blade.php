
@extends('back.layouts.master')
@section('content')


                        <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                                @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                {{$error}}
                                @endforeach

                            </div>
                            @endif
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Обновить Контакт</h3>
                                        </div>
                                        <hr>
                                        <form action="{{route('admin.contact.update',$contact->id)}}" method="POST" enctype="multipart/form-data">
                                           @method('PUT')
                                              @csrf
                                           


                                             <div class="form-group">
                                                <label  class="control-label mb-1">Телефон</label>
                                                <input  name="phone" value="{{$contact->phone}}" type="number" class="form-control" required >
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Email</label>
                                                 <input  name="email" value="{{$contact->email}}" type="email" class="form-control" required >
                                            </div>
                                             
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Факс</label>
                                                 <input  name="fax" value="{{$contact->fax}}" type="number" class="form-control" required >
                                               
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Адрес Tm</label>
                                                 <input  name="adres" value="{{$contact->adres}}" type="text" class="form-control" required >
                                               
                                            </div>
                                             
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Адрес Ru</label>
                                                 <input  name="adres_ru" value="{{$contact->adres_ru}}" type="text" class="form-control" required >
                                               
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Адрес En</label>
                                                 <input  name="adres_en" value="{{$contact->adres_en}}" type="text" class="form-control" required >
                                               
                                            </div>

                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">улица Tm</label>
                                                 <input  name="adres_koce" value="{{$contact->adres_koce}}" type="text" class="form-control" required >
                                               
                                            </div>

                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">улица Ru</label>
                                                 <input  name="adres_koce_ru" value="{{$contact->adres_koce_ru}}" type="text" class="form-control" required >
                                               
                                            </div>
                                             <div class="form-group has-success">
                                                <label class="control-label mb-1">улица En</label>
                                                 <input  name="adres_koce_en" value="{{$contact->adres_koce_en}}" type="text" class="form-control" required >
                                               
                                            </div>
                                           
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                  Обновить Контакт
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div><!--/.col-->
                  </div>
@endsection

