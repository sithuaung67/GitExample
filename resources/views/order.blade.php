@extends('layouts.app')

@section('title') Orders @stop

@section('content')

    <div class="container" style="margin-top: 70px;">
        <div class="row">
            <div class="col-sm-12">
                @foreach($orders as $od)
                <div class="card mb-3">
                    <div class="card-header">Order ID : {{$od->id}}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <p>Name : {{$od->name}}</p>
                                <p>Email : {{$od->email}}</p>
                                <p>Phone : {{$od->phone}}</p>
                                <p>Address : {{$od->address}}</p>
                            </div>
                            <div class="col-md-8">
                                <table class="table">
                                    <tr>
                                        <td>Item Name</td>
                                        <td>Price</td>
                                        <td>Qty</td>
                                        <td>Amount</td>
                                    </tr>
                                    @foreach($od->cart->items as $item)
                                        <tr>
                                            <td>{{$item['item']['product_name']}}</td>
                                            <td>{{$item['item']['price']}}</td>
                                            <td>{{$item['qty']}}</td>
                                            <td>{{$item['amount']}}</td>
                                        </tr>
                                        @endforeach
                                    <tr>
                                        <td colspan="3" class="text-right">Total Amount</td>
                                        <td>{{$od->cart->totallyAmount}}</td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a target="_blank" href="{{route('print',['id'=>$od->id])}}" class="btn btn-outline-primary"><i class="fas fa-print"></i></a>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>

    @stop