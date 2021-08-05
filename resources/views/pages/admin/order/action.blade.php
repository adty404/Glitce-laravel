<a href="{{ route('admin.order.payment-slip.approve', ['id' => $data['id']] ) }}" data-toggle="tooltip" title="Approve" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
<button type="button" class="btn btn-danger" data-toggle="modal" data-animation="bounce"
    data-target=".bs-example-modal-sm"><i class="fas fa-times-circle"></i></button>

{{-- Modal --}}
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="mySmallModalLabel">Reasons Why This Order Not Approved</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.order.payment-slip.decline') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $data['id'] }}">

                        <input type="hidden" name="payment_slip_id" value="{{ $data['payment_slip_id'] }}">
                    </div>

                    <div class="form-group">
                        <label for="message">Reasons</label>
                        <textarea class="form-control" name="reason" rows="5"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>