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
                                            <h3 class="text-center">Обновить Лицензия</h3>
                                        </div>
                                        <hr>
                                        <form action="{{route('admin.license.update',$license->id)}}" method="POST" enctype="multipart/form-data">
                                           @method('PUT')
                                              @csrf
                                           


                                             <div class="form-group">
                                                <label  class="control-label mb-1">ИМЯ Tm</label>
                                                <input  name="title_tm" value="{{$license->title_tm}}" type="text" class="form-control" required >
                                            </div>

                                             <div class="form-group">
                                                <label  class="control-label mb-1">ИМЯ Ru</label>
                                                <input  name="title_ru" value="{{$license->title_ru}}" type="text" class="form-control" required >
                                            </div>

                                            <div class="form-group">
                                                <label  class="control-label mb-1">ИМЯ En</label>
                                                <input  name="title_en" value="{{$license->title_en}}" type="text" class="form-control" required >
                                            </div>

                                             
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1"></label>
                                                <img src="{{asset($license->image)}}" class="rounded"  width="300">
                                                <input  name="image" type="file" value="{{ old('image') }}" class="form-control cc-name valid">
                                               
                                            </div>
                                             
                                            
                                           
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                  Обновить Лицензия
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

