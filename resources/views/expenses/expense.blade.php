@extends('layout.main')

@section('title')
Expense
@endsection
@section('content')
<style type="text/css">
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn){
	width: 100% !important;
}
</style>
<div class="card">
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Expense</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="material-icons">clear</i>
              </button>
            </div>
          <form id="expensesForm">
            <div class="modal-body">
               		<div class="row">
               			<div class="col-md-12">
						  <select class="selectpicker" name="account_head_name" data-size="7" data-style="btn btn-primary btn-round" title="Single Select">
						    <option disabled selected>Account Head</option>
						    <option value="2">Abbas Shakir</option>
						    <option value="3">Uzair</option>
						  </select>
						  </div>     
               		</div>  
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">QTY</label>
                                <input type="number" name="quantity" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">SFT/RFT</label>
                                <input autocomplete="off" name="sft_rft" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Price/Cost</label>
                                <input autocomplete="off" name="price_cost" type="number" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Account Head</label>
                                <input autocomplete="off" name="account_head" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Total Amount</label>
                                <input autocomplete="off" name="total_amount" type="number" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="bmd-label-floating"> Description</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-12">
                    		<div class="form-group">
		                    	<input type="text" class="form-control datepicker" value="10/06/2018">
		                  </div>
                    	</div>
                    </div>
                

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Expense</button>
            </div>
            </form>
          </div>
        </div>
      </div>


    <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon" style="float: right;cursor: pointer;" data-toggle="modal" data-target="#myModal">
        <i class="material-icons">add</i>
      </div>
      <h4 class="card-title">All Expenses</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive table-hover">
        <table class="table">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>Qty</th>
              <th>SFT/RFT</th>
              <th>Cost/Price</th>
              <th>Expense</th>
              <th>Account Head</th>
              <th>Total Amount</th>
              <th class="text-right">Actions</th>
            </tr>
          </thead>
          <tbody>
            
            <tr>
              <td class="text-center">2</td>
              <td>John Doe</td>
              <td>Design</td>
              <td>Design</td>
              <td>Design</td>
              <td>2012</td>
              <td>€ 89,241</td>
              <td class="td-actions text-right">
                <button type="button" rel="tooltip" class="btn btn-info btn-round" data-original-title="" title="">
                  <i class="material-icons">person</i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-success btn-round" data-original-title="" title="">
                  <i class="material-icons">edit</i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-round" data-original-title="" title="">
                  <i class="material-icons">close</i>
                </button>
              </td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>


@endsection
@section('custom-scripts')
	<script type="text/javascript">
		$('.sidebar-wrapper').find('.nav').find('li').removeClass('active');
		$('#expenseAll').addClass('active');
		$('#expenseTabs').addClass('show');
		$(document).ready( function () {
		    $('table').DataTable();
		    md.initFormExtendedDatetimepickers();
		});
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
		$(document).on('submit','#expensesForm',function(event){
			event.preventDefault();
			var data = $('#expensesForm').serializeArray();
			$.ajax({
	            type: "POST",
	            url: "{{ route('add-expense') }}",
	            data: data,
	            success: function( data ) {
                $('#expensesForm')[0].reset();
                
	                // console.log(data);
	            }
	        });
		});

	</script>
@endsection
