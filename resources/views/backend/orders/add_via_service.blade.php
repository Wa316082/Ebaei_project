<div class="modal fade" id="via_services" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog " role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="via_services">Update Status</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ url('admin/order/via_service') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div>
                    <input type="hidden" name="order_checked" id="order_check" value="">
                    <input type="hidden" name="order_not_checked" id="order_not_check" value="">

                </div>

                <div class="form-group ">
                    <label for="merchant">Select Merchant</label>
                    <select name="merchant" class="form-control select2" id="merchant">
                        <option value="">Select One</option>
                        @foreach ($merchants as $merchant )
                            <option value="{{ $merchant->id }}">{{ $merchant->name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('merchant')
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
