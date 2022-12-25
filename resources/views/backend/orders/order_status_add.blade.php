<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog " role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Update Status</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ url('admin/status.histroy') }}" enctype="multipart/form-data" method="POST"  >
            @csrf
            <div class="modal-body">

                <div class="form-group">
                    <label for="status_id" class="col-form-label">Select Status Group</label>
                    <select class="form-control data_parent select2" name="status_id">
                        <option value="">Select Status</option>
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}" data-parent="{{ $status->name}}">{{ $status->name }}
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
                    <label for="remarks" class="col-form-label">Remarks And Comments</label>
                    <textarea class="form-control" id="remarks" name="remarks"></textarea>
                    @error('remarks')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group ">
                    <label for="proves" class="col-form-label">Remarks And Comments</label>
                    <input type="file" class="form-control d-none" id="proves" name="proves" />
                    @error('proves')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>
</div>
