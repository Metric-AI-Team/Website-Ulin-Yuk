<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lokasi Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <h1 class="m-3">Lokasi Destinasi</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="float-end">
                        <button type="button" class="btn btn-sm btn-primary m-3" data-bs-toggle="modal" data-bs-target="#add-modal"><strong>Tambah</strong></button>
                    </div>
                    <div class="card-body">
                        <table id="datatables" class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Dekripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="table-list">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- create modal --}}
    <div class="modal fade" id="add-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Lokasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" ></button>
                </div>
                <div class="modal-body">
                    <form id="add-post" method="post">
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="content" name="content"></textarea>
                        </div>
                        <button type="button" id="add-submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- update modal --}}
    <div class="modal fade" id="update-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="update-post" method="post">
                        <div class="mb-3">
                            <label for="update-title" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="title" id="update-title" >
                        </div>
                        <div class="mb-3">
                            <label for="update-content" class="form-label">Deksripsi</label>
                            <textarea class="form-control" name="content" id="update-content"></textarea>
                        </div>
                        <button type="button" id="update-button" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- delete modal --}}
    <div class="modal fade" id="delete-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="lead">Apa yakin hapus data ini?</p>
                    <input name="id" id="post-id" type="hidden">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" id="delete-button" class="btn btn-primary">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-database.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#datatables').DataTable();
        });

        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "{{ config('services.firebase.api_key') }}",
            authDomain: "{{ config('services.firebase.auth_domain') }}",
            databaseURL: "{{ config('services.firebase.database_url') }}",
            projectId: "{{ config('services.firebase.project_id') }}",
            storageBucket: "{{ config('services.firebase.storage_bucket') }}",
            messagingSenderId: "{{ config('services.firebase.messaging_sender_id') }}",
            appId: "{{ config('services.firebase.app_id') }}"
        };

        // Initialize Firebase
        const app = firebase.initializeApp(firebaseConfig);

        var database = firebase.database();

        var lastId = 0;

        // get post data
        database.ref("destination_place").on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function(index, value){
                if(value) {
                    htmls.push('<tr>\
                        <td>'+ index +'</td>\
                        <td>'+ value.destination_place_name +'</td>\
                        <td>'+ value.destination_place_description +'</td>\
                        <td><a data-bs-toggle="modal" data-bs-target="#update-modal" class="btn btn-success update-post" data-id="' + index + '"><strong>Ubah</strong></a>\
                        <a data-bs-toggle="modal" data-bs-target="#delete-modal" class="btn btn-danger delete-data" data-id="' + index + '"><strong>Hapus</strong></a></td>\
                    </tr>');
                }
                lastId = index;
            });
            $('#table-list').html(htmls);
        });

        // add data
        $('#add-submit').on('click', function() {
            var formData = $('#add-post').serializeArray();
            var createId = Number(lastId) + 1;

            firebase.database().ref('destination_place/' + createId).set({
                destination_place_name : formData[0].value,
                destination_place_description : formData[1].value,
            });

            // Reassign lastID value
            lastId = createId;
            $("#add-post")[0].reset();
            $("#add-modal").modal('hide');
        });

        // update modal
        var updateID = 0;
        $('body').on('click', '.update-post', function() {
            updateID = $(this).attr('data-id');
            firebase.database().ref('destination_place/' + updateID).on('value', function(snapshot) {
                var values = snapshot.val();
                $('#update-title').val(values.destination_place_name);
                $('#update-content').val(values.destination_place_description);
            });
        });

        // update post
        $('#update-button').on('click', function() {
            var values = $("#update-post").serializeArray();
            var postData = {
                destination_place_name : values[0].value,
                destination_place_description : values[1].value,
            };

            var updatedPost = {};
            updatedPost['/destination_place/' + updateID] = postData;

            firebase.database().ref().update(updatedPost);

            $("#update-modal").modal('hide');
            $("#update-post")[0].reset();
        });

        // delete modal
        $("body").on('click', '.delete-data', function() {
            var id = $(this).attr('data-id');
            $('#post-id').val(id);
        });

        // delete post
        $('#delete-button').on('click', function() {
            var id = $('#post-id').val();
            firebase.database().ref('destination_place/' + id).remove();

            $('#post-id').val('');
            $("#delete-modal").modal('hide');
        });
    </script>
</body>
</html>
