@extends('layouts.app')

@section('title','Create Order')

@push('css')

@endpush

@section('content')

<div class="app-title">
  <div>
    <h1><i class="fa fa-edit"></i> Create Order</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Oreder</li>
    <li class="breadcrumb-item"><a href="#">Create Order</a></li>
  </ul>
</div>
    <div class="tile">
      @if($errors->any())
        @foreach($errors->all() as $error)

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{$error}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        @endforeach
      @endif
      <h3 class="tile-title">New Order</h3>
      <div class="tile-body">
        <form class="form-horizontal" action="{{route('order.store')}}" method="post">
          @csrf
          <div class="form-group row">
            <label class="control-label col-md-2">Item</label>:
            <div class="col-md-3">
              <select name="cmbItem" id="" class="form-control">
                @foreach($items as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
            </div>
            <label class="control-label col-md-2">UOM</label>:
            <div class="col-md-3">
              <select name="cmbUOM" id="" class="form-control">
                @foreach($uoms as $uom)
                  <option value="{{$uom->id}}">{{$uom->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-2">Qty</label>:
            <div class="col-md-3">
              <input class="form-control" name="txtQty" type="text" placeholder="Enter Item Qty">
            </div>
            <label class="control-label col-md-2">Price</label>:
            <div class="col-md-3">
              <input class="form-control" name="txtPrice" type="text" placeholder="Enter Item Price">
            </div>
            
          </div>
          <div class="form-group row">
            <label class="control-label col-md-2">Name</label>:
            <div class="col-md-8">
              <input class="form-control" name="txtName" type="text" placeholder="Enter Customer Name">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-2">Phone</label>:
            <div class="col-md-3">
              <input class="form-control" name="txtPhone" type="text" placeholder="Enter Phone Number">
            </div>
            <label class="control-label col-md-2">Payment Method</label>:
            <div class="col-md-3">
              <select name="cmbPayment" id="" class="form-control">
                  <option value="Cash">Cash</option>
                  <option value="Credit Card">Credit Card</option>
              </select>
            </div>
          </div>
         
          <div class="form-group row">
            <label class="control-label col-md-2">Address</label>:
            <div class="col-md-8">
              <input class="form-control" name="txtAddress" type="text" placeholder="Enter Customer Address">
            </div>
          </div>
          
        
      </div>
        <div class="row">
          <div class="col-md-7" style="margin-right: 45px;"></div>
          <div class="col-md-3">
            <a class="btn btn-secondary" href="{{route('order.index')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Create</button>
          </div>
        </div>
        </form>
    </div>
  </div>
  <div class="clearix"></div>

@endsection

@push('css')

@endpush