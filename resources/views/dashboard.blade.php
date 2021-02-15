@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
   <div class="row">
    <div class="col-md-12">
<p>
Welcome to your ULOPS dashboard. More options coming soon
</p>
    </div>
@endsection

@push('js')
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
 