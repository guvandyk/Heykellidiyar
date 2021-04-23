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
                                            <h3 class="text-center">Добавить Контакт</h3>
                                        </div>
                                        <hr>
                                        <form action="{{route('admin.contact.store')}}" method="POST" enctype="multipart/form-data">
                                           @csrf
                                             
                                             <div class="form-group">
                                                <label  class="control-label mb-1">Телефон</label>
                                                <input  name="phone" type="number" class="form-control" required >
                                            </div>
                                             <div class="form-group">
                                                <label  class="control-label mb-1">Факс</label>
                                                <input  name="fax" type="number" class="form-control" required >
                                            </div>
                                             <div class="form-group">
                                                <label  class="control-label mb-1">Email</label>
                                                <input  name="email" type="email" class="form-control" required >
                                            </div>

                                             <div class="form-group">
                                                <label  class="control-label mb-1">Адрес_Tm</label>
                                                <input  name="adres" type="text" class="form-control" required >
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Адрес_Ru</label>
                                                <input  name="adres_ru" type="text" class="form-control" required >
                                            </div>
                                             <div class="form-group">
                                                <label  class="control-label mb-1">Адрес_En</label>
                                                <input  name="adres_en" type="text" class="form-control" required >
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">улица_Tm</label>
                                                <input  name="adres_koce" type="text" class="form-control" required >
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">улица_Ru</label>
                                                <input  name="adres_koce_ru" type="text" class="form-control" required >
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">улица_En</label>
                                                <input  name="adres_koce_en" type="text" class="form-control" required >
                                            </div>
                                             
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                  Добавить Контакт
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

