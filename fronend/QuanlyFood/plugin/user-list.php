<?php
    session_start();
    include('include/head.php');
?>
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class ="table table-bordered">
                <thead>
                    <th>S1.No</th>
                    <th>uid</th>
                    <th>Passwors</th>
                    <th>Email Id</th>
                    <th>Enable/Disabled</th>
                    <th>Action</th>

                </thead>
                <tbody>
                    <?php
                    include('dbcon.php');
                    $users = $auth->listUsers();
                    $i=1;
                    foreach ($users as $user) {
                        
                    ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $user->uid ?></td>
                        <td><?= $user->password ?></td>
                        <td><?= $user->email ?></td>
                        

                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include('include/footer.php');
?>