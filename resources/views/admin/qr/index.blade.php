@extends('admin.template')

@section('main')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3>List of Barcodes</h3>
                </div>

                <div class="card-body">
                    <!-- Check if there are barcodes -->
                    @if($barcodes->isEmpty())
                        <div class="alert alert-warning text-center">No barcodes found!</div>
                    @else
                        <!-- Table for displaying barcodes -->
                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                             <thead class="text-center">
                                <tr>
                                    <th>SL No</th>
                                    <th>Barcode</th>
                                    <th>Advance (Tk.)</th>
                                    <th>Balance (Tk)</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($barcodes as $barcode)
                                    <tr>
                                        <td>{{ $barcode->id }}</td>
                                        <td>
                                            <!-- Display barcode image with higher DPI for better quality -->
                                            <img src="https://barcode.tec-it.com/barcode.ashx?data={{ $barcode->card_number }}&code=Code128&dpi=300" alt="Barcode for {{ $barcode->card_number }}" style="width: 150px; height: auto;">
                                        </td>
                                        <td>{{ $barcode->advance }} Taka</td>
                                        <td>{{ $barcode->balance }} Taka</td>
                                        <td>
                                            <!-- Status display with badge styles -->
                                            @if($barcode->status == 'active')
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <!-- Actions with icons -->
                                            @if($barcode->status == 'active')
                                                <a href="{{ route('barcode.toggleStatus', $barcode->id) }}" class="btn btn-warning btn-sm">
                                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('barcode.toggleStatus', $barcode->id) }}" class="btn btn-success btn-sm">
                                                    <i class="glyphicon glyphicon-ok-circle"></i>
                                                </a>
                                            @endif
                                        
                                            <!-- Barcode download button -->
                                            <a href="{{ route('barcode.download', $barcode->card_number) }}" class="btn btn-info btn-sm">
                                                <i class="glyphicon glyphicon-download"></i>
                                            </a>
                                        
                                            <!-- Delete button -->
                                            <form action="{{ route('barcode.destroy', $barcode->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<script>

    function confirmDelete() {
        return confirm('Are you sure you want to delete this barcode?');
    }
</script>


<!-- DataTables JS -->

@endsection
