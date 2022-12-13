<div class="modal fade" id="exampleModalTogglemerchant" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-top">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Merchant</h1>
                <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/merchant/store') }}" method="POST">
                    @csrf
                    <div class="card-body row d-flex align-items-center">
                        <div class="form-group col-md-6  ">
                            <label for="name">Merchant Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" id="name"
                                   placeholder="Enter Name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group col-md-6 col-lg-4">
                            <label for="agent_id">Agent Name <span class="text-danger"></span></label>
                            <select name="agent_id" class="form-control select2" id="agent_id" style="width: 100%;">
                                <option value="" selected="selected">Select One</option>
                                @foreach($agents as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->name }}</option>

                                @endforeach
                            </select>
                            @error('agent_id')
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

