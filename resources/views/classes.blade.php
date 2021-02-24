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
                    <h4 class="card-title">Available Classes</h4>
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

                                        <td>
                                  <button class='btn btn-primary'>Join</button>
                                    </td>
                                     
                                </tr>
                                 


 <tr>
                                    <td>
                                    Creative writing masterclass
                                    </td>
                                    <td>
                                     John Jakes
                                    </td>
                                    <td>
                                   3 - 4 PM
                                    </td>



                                          <td>
                                  <button class='btn btn-primary'>Join</button>
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
 