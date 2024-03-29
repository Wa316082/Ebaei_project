<div class="modal fade" id="exampleModalCenterservice" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin/service.add') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="status_id" class="col-form-label">Select Service</label>
                        <select class="form-control select2" name="status_id">
                            <option value="">Select service</option>
                            @foreach ($merchants as $merchant)
                                <option value="{{ $merchant->id }}">{{ $merchant->name }}
                                </option>
                            @endforeach

                        </select>
                        @error('status_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="hidden" name="status_checked" id="order_get_id" value="">
                        <input type="hidden" name="status_not_checked" id="not_check_id" value="">

                    </div>

                    <div class="form-group ">
                        <label for="remarks" class="col-form-label">Others Tracking no</label>
                        <textarea class="form-control" id="remarks" name="remarks"></textarea>
                    </div>
                    @error('remarks')
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
