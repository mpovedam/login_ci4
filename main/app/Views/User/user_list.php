<?= $this->extend("App\Views\layout") ?>

<?= $this->section('main') ?>
<div id="main">
    <div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title"><span>Lista de Usuarios</span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">User</a>
                            </li>
                            <li class="breadcrumb-item active">Users List
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <!-- users list start -->
                <section class="users-list-wrapper section">
                    <div class="users-list-filter">
                        <div class="card-panel">
                            <div class="row">
                                <form>
                                    <div class="col s12 m6 l3">
                                        <label for="users-list-verified">Verified</label>
                                        <div class="input-field">
                                            <select class="form-control" id="users-list-verified">
                                                <option value="">Any</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3">
                                        <label for="users-list-role">Role</label>
                                        <div class="input-field">
                                            <select class="form-control" id="users-list-role">
                                                <option value="">Any</option>
                                                <option value="User">User</option>
                                                <option value="Staff">Staff</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3">
                                        <label for="users-list-status">Status</label>
                                        <div class="input-field">
                                            <select class="form-control" id="users-list-status">
                                                <option value="">Any</option>
                                                <option value="Active">Active</option>
                                                <option value="Close">Close</option>
                                                <option value="Banned">Banned</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3 display-flex align-items-center show-btn">
                                        <button type="submit" class="btn btn-block indigo waves-effect waves-light">Show</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="users-list-table">
                        <div class="card">
                            <div class="card-content">
                                <!-- datatable start -->
                                <div class="responsive-table">
                                    <table id="user-list" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>email</th>
                                                <th>username</th>
                                                <th>Activity</th>
                                                <th>Ban</th>
                                                <th>Rols</th>
                                                <th>Active</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users list ends -->

                <!-- START RIGHT SIDEBAR NAV -->
                <?= view('App\Views\_right_side_nav') ?>

            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('customScripts') ?>´
<script>
    $(document).ready(function() {
        $('#user-list').DataTable({
            "processing": true,
            "serverSide": true,
            "responsive": true,
            "ajax": {
                "url": "<?= base_url('admin/get_lista-de-usuarios') ?>",
                "headers": {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                "type": "post"
            },
            "columnDefs": [{
                    targets: 0,
                    "data": "id"
                },
                {
                    targets: 1,
                    "data": "email"
                },
                {
                    targets: 2,
                    "data": "username"
                },
                {
                    targets: 3,
                    "data": "activity",
                    "orderable": false
                },
                {
                    targets: 4,
                    "data": "ban",

                    render: function(data, type, row) {
                        if (data !== 'banned') {
                            return '';
                        } else {
                            return '<span class="chip red lighten-5"><span class="red-text">' + data + '</span></span>';
                        }
                    }
                },
                {
                    targets: 5,
                    "data": "roles",

                    render: function(data, type, row) {
                        var buttons = '<div class="col s12 mt-0 mb-0">';
                        for (i = 1; i <= Object.keys(data).length; i++) {
                            buttons += '<span class="chip purple lighten-5"><span class="purple-text">' + data[i] + '</span></span>'
                        }

                        return buttons + '</div>';
                    },

                },
                {
                    targets: 6,
                    "data": "active",

                    render: function(data, type, row) {
                        if (data === 'Activo') {
                            return '<span class="chip green lighten-5"><span class="green-text">' + data + '</span></span>';
                        } else {
                            return '<span class="chip red lighten-5"><span class="red-text">' + data + '</span></span>';
                        }
                    }
                },
                {
                    targets: 7,
                    "defaultContent": ""
                }
            ]

        });
    });
</script>
<?= $this->endSection() ?>