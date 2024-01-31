<div class="modal fade" id="add_message" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Message</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>
