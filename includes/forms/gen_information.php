
 <div class="row text-center mb-2">
                      <h4><strong> I. General Information</strong></h4>
                    </div>
                    <div class="row ps-4">
                      <h5> <strong>A. School Enrolment</strong></h5>
                    </div>

                    <div class="row align-items-center py-2 mb-3">
                        <div class="col ps-5 ">

                          <h5 class="mb-2"><span class="badge bg-secondary">Male:</span></h5>
                          <input type="number" class="form-control form-control-lg" value="<?= $row['se_male']; ?>" readonly />

                        </div>

                        <div class="col pe-5">

                        <h5 class="mb-2"><span class="badge bg-secondary">Female:</span></h5>
                          <input type="number" class="form-control form-control-lg" value="<?= $row['se_female']; ?>" readonly />

                        </div>
                      
                      </div>

                      <div class="row ps-4">
                         <h5><strong>B. No. of School Personnel</strong></h5>
                      </div>

                      <div class="row ps-4 mt-2">
                        <div class="col">
                         <h5>1. Teaching</h5>
                        </div>

                        <div class="col">
                         <h5>2. Non Teaching</h5>
                        </div>

                      </div>

                      <div class="row align-items-center py-2 mb-3">
                        <div class="col ps-5">

                          <h5 class="mb-2"><span class="badge bg-secondary">Male:</span></h5>
                          <input type="number" name="" class="form-control form-control-lg" value="<?= $row['sp_teaching_male']; ?>" readonly />

                        </div>

                        <div class="col ">

                        <h5 class="mb-2"><span class="badge bg-secondary">Female:</span></h5>
                          <input type="number" name="" class="form-control form-control-lg" value="<?= $row['sp_teaching_female']; ?>" readonly />

                        </div>

                        <div class="col ps-5 ">

                          <h5 class="mb-2"><span class="badge bg-secondary">Male:</span></h5>
                          <input type="number" name="" class="form-control form-control-lg" value="<?= $row['sp_non_teaching_male']; ?>" readonly />

                        </div>

                        <div class="col pe-5">

                        <h5 class="mb-2"><span class="badge bg-secondary">Female:</span></h5>
                          <input type="number" name="" class="form-control form-control-lg" value="<?= $row['sp_non_teaching_female']; ?>" readonly />

                        </div>
                      
                      </div>
