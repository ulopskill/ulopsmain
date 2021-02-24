@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')


<style type="text/css">
	

.fixed-plugin {

display:none;
}

</style>


   <div class="row">
    <div class="col-md-12">
<h2>
Welcome to your ULOPS dashboard. 
<br/><br/>













 


































<div class="row">
       
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">My Payments</h4>
                </div>
                <div class="card-body">
                    <p>No payments available</p>
                </div>
            </div>
        </div>
    </div>
















    </div>


 

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
 