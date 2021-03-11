<form action="{{ route('categories.store') }}" method="POST">
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @csrf
                        <div class="col-12">
                            <div class="form-group">
                                <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
                                    success</label>
                                <input type="text" class="form-control is-valid" id="inputSuccess" name="name"
                                    placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- select -->
                            <div class="form-group">
                                <label>Select</label>
                                <select class="form-control"  name="parent_id">
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</form>
