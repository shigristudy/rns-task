@extends('layout.main')
@section('title')
Data Tables
@endsection
@section('content')
    <div class="container-fluid">

         <div class="col-lg-5 col-md-6 col-sm-3">
                  <select class="selectpicker" data-style="select-with-transition" multiple title="Choose City" data-size="7">
                    <option disabled> Multiple Options</option>
                    <option value="2">Paris </option>
                    <option value="3">Bucharest</option>
                    <option value="4">Rome</option>
                    <option value="5">New York</option>
                    <option value="6">Miami </option>
                    <option value="7">Piatra Neamt</option>
                    <option value="8">Paris </option>
                    <option value="9">Bucharest</option>
                    <option value="10">Rome</option>
                    <option value="11">New York</option>
                    <option value="12">Miami </option>
                    <option value="13">Piatra Neamt</option>
                    <option value="14">Paris </option>
                    <option value="15">Bucharest</option>
                    <option value="16">Rome</option>
                    <option value="17">New York</option>
                    <option value="18">Miami </option>
                    <option value="19">Piatra Neamt</option>
                  </select>
              </div>

        <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModal">Classic modal
            <div class="ripple-container"></div>
        </button>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Modal title</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="material-icons">clear</i>
              </button>
            </div>
            <div class="modal-body">
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
              </p>
             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-link">Nice Button<div class="ripple-container"></div></button>
              <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
            <div class="input-field col s12">
              <select>
                  <option>
                      <div class="col-sm-8">
                          hello
                      </div>
                      <div class="col-sm-4">
                          hi
                      </div>
                  </option>
              </select>
          </div>
       <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Data Table</h4>
                <p class="card-category">DataTables</p>
            </div>
            <div class="card-body">
               <div class="material-datatables">
                   <table class="table table-striped table-no-bordered table-hover">
                       <thead>
                           <tr>
                               <th>Column 1</th>
                               <th>Column 1</th>
                               <th>Column 1</th>
                               <th>Column 1</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr>
                           <tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr><tr>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                               <td>Data 1</td>
                           </tr>
                       </tbody>
                       <tfoot>
                         <tr>
                               <th>Column 1</th>
                               <th>Column 1</th>
                               <th>Column 1</th>
                               <th>Column 1</th>
                           </tr>
                           
                       </tfoot>
                   </table>
               </div>
            </div>
        </div>
    </div>
  
          
@endsection
@section('custom-scripts')

<script type="text/javascript">
    
$(document).ready( function () {
    $('table').DataTable();
} );

  
</script>
@endsection