<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="php/admin_code.php" method="POST">
                  <div class="modal-body">
                  <input type="hidden" name="delete_data" id="delete_data">
                  <h4> Do you want to Delete <strong>"<?= $row['name']; ?>" </strong> account?</h4>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="delete_user" class="btn btn-danger">Delete</button>
                  </div>