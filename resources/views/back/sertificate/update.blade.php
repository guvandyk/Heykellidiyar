@extends('back.layouts.master')
@section('content')


                        <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                {{$error}}
                                @endforeach

                            </div>
                            @endif
                                        <div class="card-title">
                                            <h3 class="text-center">Обновить сертификат</h3>
                                        </div>
                                        <hr>
                                        <form action="{{route('admin.sertificate.update',$sertificate->id)}}" method="POST" enctype="multipart/form-data">
                                           @method('PUT')
                                              @csrf
                                           


                                             <div class="form-group">
                                                <label  class="control-label mb-1">Имя_Tm</label>
                                                <input  name="title_tm" value="{{$sertificate->title_tm}}" type="text" class="form-control" required >
                                            </div>

                                             <div class="form-group">
                                                <label  class="control-label mb-1">Имя_Ru</label>
                                                <input  name="title" value="{{$sertificate->title}}" type="text" class="form-control" required >
                                            </div>

                                             <div class="form-group">
                                                <label  class="control-label mb-1">Имя_En</label>
                                                <input  name="title_en" value="{{$sertificate->title_en}}" type="text" class="form-control" required >
                                            </div>

                                             
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1"></label>
                                                <img src="{{asset($sertificate->image)}}" class="rounded"  width="300">
                                                <input  name="image" type="file"  class="form-control cc-name valid"  required>
                                               
                                            </div>
                                             
                                            
                                           
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                  Обновить сертификат
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

