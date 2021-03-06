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
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">My Classes</h5>
                    <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> CLASSES</h3>
<br/>

<a href='/classes' class="btn btn-success">View More</a>


                </div>
                <div class="card-body">
                  
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">My</h5>
                    <h3 class="card-title"><i class="tim-icons icon- text-info"></i> MY PAYMENTS</h3>


<br/>

<a href='/payments' class="btn btn-success">View More</a>


                </div>
                <div class="card-body">
                   
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">My Settings</h5>
                    <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> SETTINGS</h3>


<br/>

<a href='/profile' class="btn btn-success">View More</a>

<br/>

                </div>
                
                </div>
            </div>
        </div>




































<div class="row">
       
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Recent Classes</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter" id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                       Course Name
                                    </th>
                                    <th>
                                        Tutor
                                    </th>
                                    <th>
                                        Period
                                    </th>
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    Introduction To Graphic Design
                                    </td>
                                    <td>
                                     Joe Adeboye
                                    </td>
                                    <td>
                                   2 - 3 PM
                                    </td>
                                     
                                </tr>
                                 
                            </tbody>
                        </table>
                    </div>
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
 