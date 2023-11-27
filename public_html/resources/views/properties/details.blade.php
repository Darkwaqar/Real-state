@extends('properties.layouts.main')

@section('content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      

      <!-- Main content -->
      <section class="content">
        <div class="row">
      
          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title"></h3>
                <a href="#" style="float: right;" class="btn btn-rounded btn-success mb-5">
                   </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Applinaces </th>
                              <th>Basements </th>
                              <th>Exterior Feature </th>
                              <th>Architectural Style</th>
                              <th>FirePlace Feature</th>
                              <th>Property Flooring</th>
                              <th>Foundation Details</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr> 
                              <td>
                                @php $appliance =  $Details['PropertyAppliances']; @endphp
                                @foreach ($appliance['appliances'] as $value)
                                {{$value['ApplianceName']}} <br>
                                @endforeach
                              </td>
                              <td>
                                @php $basement =  $Details['PropertyBasement']; @endphp
                                  @foreach ($basement['basement'] as $value)
                                  {{$value['BasementName']}} <br>
                                  @endforeach
                              </td>                            
                              <td>
                                  @php $exterior =  $Details['PropertyExteriorFeatures']; @endphp
                                  @foreach ($exterior['ExteriorFeaturs'] as $value)
                                  {{$value['ExterFeatureName']}} <br>
                                  @endforeach
                              </td>
                              <td>
                                @php $styles =  $Details['PropertyArchitecturalStyles']; @endphp
                                @foreach ($styles['ArchitecturalStyle'] as $value)
                                {{$value['ArchitecturalName']}} <br>
                                @endforeach
                            </td>
                            <td>
                              @php $FirePlaceFeature =  $Details['PropertyFirePlaceFeature']; @endphp
                              @foreach ($FirePlaceFeature['propertyFireplacefeatures'] as $value)
                              {{$value['FirePlaceName']}} <br>
                              @endforeach
                          </td>
                          <td>
                            @php $PropertyFlooring =  $Details['PropertyFlooring']; @endphp
                            @foreach ($PropertyFlooring['propertyFlooring'] as $value)
                            {{$value['FloringName']}} <br>
                            @endforeach
                        </td>
                        <td>
                          @php $FoundationDetails =  $Details['FoundationDetails']; @endphp
                          @foreach ($FoundationDetails['propertyFoundationDetails'] as $value)
                          {{$value['FoundationDetailsName']}} <br>
                          @endforeach
                      </td>
                          </tr>
                      </tbody>
                   
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

           
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>

@endsection