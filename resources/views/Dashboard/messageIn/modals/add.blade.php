<div class="modal fade" id="add_message" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Message  <i class="fa-brands fa-rocketchat"></i></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
            </div>
            <form action="/message" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">To User</label>
                        <select name="user_id" class="form-select" id="">
                            <option value="">Select Choose</option>
                            @foreach ($user as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea type="text" name="message" class="form-control" style="height: 150px" required></textarea>
                        <label for="">Message</label>
                    </div>
                    <div class="mb-3">
                        <label for="">File</label>
                        <input type="file" name="file" class="form-control" id="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>
