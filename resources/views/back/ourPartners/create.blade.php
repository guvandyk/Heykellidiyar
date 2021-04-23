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
                                            <h3 class="text-center">Добавить Партнера</h3>
                                        </div>
                                        <hr>
                                        <form action="{{route('admin.ourpartners.store')}}" method="POST" enctype="multipart/form-data">
                                           @csrf
                                             
                                             <div class="form-group">
                                                <label  class="control-label mb-1">Имя Tm</label>
                                                <input  name="title_tm" type="text" class="form-control" required >
                                            </div>

                                             <div class="form-group">
                                                <label  class="control-label mb-1">Имя Ru</label>
                                                <input  name="title_ru" type="text" class="form-control" required >
                                            </div>

                                            <div class="form-group">
                                                <label  class="control-label mb-1">Имя En</label>
                                                <input  name="title_en" type="text" class="form-control" required >
                                            </div>

                                             
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">ИЗОБРАЖЕНИЕ</label>
                                                <input  name="image" type="file" class="form-control cc-name valid"  required>
                                            </div>
                                             
                                           
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                  Добавить Партнера
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

