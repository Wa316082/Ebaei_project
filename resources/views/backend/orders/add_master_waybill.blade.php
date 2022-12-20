<div class="modal fade" id="masterwaybill" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog " role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="masterwaybill">Update Status</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ url('admin/order/master_waybill') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div>
                    <input type="hidden" name="order_checked" id="order_check_id" value="">
                    <input type="hidden" name="order_not_checked" id="order_not_check_id" value="">

                </div>

                <div class="form-group ">
                    <label for="master_waybill" class="col-form-label">Master Waybill</label>
                    <input type="text" class="form-control" placeholder="Master Waybill" id="master_waybill" name="master_waybill" />
                </div>
                @error('master_waybill')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>
</div>
