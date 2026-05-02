@extends('admin.template')

@section('main')
<div class="content-wrapper">
    <section class="content">
                <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Barcode</h3>
                    </div>

                    <div class="card-body">
                        <!-- Form to edit barcode -->
                        <form method="POST" action="{{ route('barcode.update', $barcode->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="card_number">Card Number</label>
                                <input type="text" id="card_number" class="form-control" value="{{ $barcode->card_number }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="balance">Balance (Taka)</label>
                                <input type="number" id="balance" name="advance" class="form-control" value="{{ $barcode->balance }}" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control" required>
                                    <option value="active" {{ $barcode->status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $barcode->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success">Update Barcode</button>
                            <a href="{{ route('barcode.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
