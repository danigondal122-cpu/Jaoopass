@extends('admin.template')

@section('main')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Barcode Generator</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(LOGIN_USER_TYPE.'/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url(LOGIN_USER_TYPE.'/barcode') }}">Barcode Management</a></li>
            <li class="active">Add Barcode</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Generate Barcode</h3>
                    </div>

                    <form method="POST" action="{{ route('barcode.store') }}" class="form-horizontal">
                        @csrf
                        <div class="box-body">
                            {{-- <span class="text-danger">(*) Fields are mandatory</span> --}}

                            <div class="form-group">
                                <label for="quantity" class="col-sm-3 control-label">Total Quantity (Barcodes):<em class="text-danger">*</em></label>
                                <div class="col-md-7 col-sm-offset-1">
                                    <input type="number" id="quantity" name="quantity" class="form-control" min="1" required>
                                    <span class="text-danger">{{ $errors->first('quantity') }}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="advance_amount" class="col-sm-3 control-label">Advance Amount (Taka):<em class="text-danger">*</em></label>
                                <div class="col-md-7 col-sm-offset-1">
                                    <input type="number" id="advance_amount" name="advance_amount" class="form-control" min="1" required>
                                    <span class="text-danger">{{ $errors->first('advance_amount') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-info" name="submit" value="submit">Generate Barcode</button>
                            <button type="button" class="btn btn-default" name="cancel" value="cancel">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    .box {
        border-radius: 15px;
        background-color: #f8f9fa;
    }

    .box-header {
        border-radius: 15px 15px 0 0;
        font-size: 1.5rem;
    }

    .box-body {
        padding: 30px;
    }

    .form-control {
        height: 50px;
        font-size: 1.1rem;
    }

    .form-group label {
        font-size: 1.1rem;
    }

    .btn {
        font-size: 1.1rem;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }

    .btn:hover {
        background-color: #218838;
        transform: scale(1.05);
    }
</style>
@endsection
