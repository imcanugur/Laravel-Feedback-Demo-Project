<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Feedback Demo Project - Uğur CAN</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container" style="margin-top: 20px;">
    <center>
        <table class="table table-striped" id="yajra-datatable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">İsim</th>
                <th scope="col">E-Posta</th>
                <th scope="col">Mesaj</th>
                <th scope="col">Tarih</th>
                <th scope="col">İşlem</th>
            </tr>
        </table>
    </center>
        <!-- boostrap model -->
        <div class="modal fade" id="feedback-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="feedbackForm"></h4>
                    </div>
                    <div class="modal-body">
                        <form id="feedbackForm" name="feedbackForm" class="form-horizontal" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">İsim</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="name" name="name" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">E-Posta</label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="mail" name="mail" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Mesaj</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="message" name="message" readonly rows="4"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
            <!-- end bootstrap model -->
    </div>
</html>


<script type="text/javascript">
    $(document).ready( function () {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('index') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'mail', name: 'mail' },
                { data: 'message', name: 'message' },
                { data: 'created_at', name: 'created_at' },
                {data: 'action', name: 'action', orderable: false},
            ],
            order: [[0, 'desc']],
        });
    });
    function view(id){
        $.ajax({
            type:"POST",
            url: "{{ route('view') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
                $('#feedbackForm').html("Detay: ");
                $('#feedback-modal').modal('show');
                $('#id').val(res.id);
                $('#name').val(res.name);
                $('#mail').val(res.mail);
                $('#message').val(res.message);
            }
        });
    }
</script>
