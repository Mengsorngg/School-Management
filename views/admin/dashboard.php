<div class="container-xxl position-relative bg-white d-flex p-0">
    <?php require "partials/sidebar.php" ?>
</div>
<div class="content">
    <?php require "partials/navigation.php" ?>
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Recent Salse</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user){ ?>
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td><?= $user['username']; ?></td>
                                <td><?= $user['email']; ?></td>
                                <td><?= $user['role']; ?></td>
                                <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
     
</div>