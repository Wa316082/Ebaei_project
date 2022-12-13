<div class="modal fade" id="exampleModalToggleagent" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-top">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Merchant</h1>
                <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/agent/store') }}" method="POST">
                    @csrf
                    <div class="card-body row d-flex align-items-center">
                        <div class="form-group col-md-6  ">
                            <label for="name">Agent Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" id="name"
                                   placeholder="Enter Name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{--                        <div class="form-group col-md-6 ">--}}
                        {{--                            <label for="display_name">Status Display Name <span class="text-danger">*</span></label>--}}
                        {{--                            <input type="text" name="display_name" class="form-control" id="display_name"--}}
                        {{--                                   placeholder="Enter Name">--}}
                        {{--                            @error('display_name')--}}
                        {{--                            <span class="text-danger">{{ $message }}</span>--}}
                        {{--                            @enderror--}}
                        {{--                        </div>--}}
                        <div>
                            <button type="button"data-bs-dismiss="modal" class="btn btn-sm btn-danger">close</button>
                            <button type="submit" class="btn btn-sm btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

