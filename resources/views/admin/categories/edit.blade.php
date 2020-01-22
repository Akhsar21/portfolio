<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @method('PATCH')
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Category for {{ $category->name }}</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    @include('admin.categories.form')
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-square" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary btn-square" type="submit">Update</button>
                </div>
            </div>
            <!-- /.modal-content-->
        </form>
    </div>
    <!-- /.modal-dialog-->
</div>
<!-- /.modal-->
