<div class="row text-center mb-2">
                      <h4> <strong>II. Health Services</strong></h4>
                    </div>


                    <div class="row ps-4">
                      <h5><strong> A. Health Appraisal</strong></h5>
                    </div>

                      <div class="row ps-4 mt-2">
                         <h5>1. Teaching</h5>
                      </div>

                      <div class="row align-items-center py-2 mb-3">
                        <div class="col ps-5">

                          <h5 class="mb-2"><span class="badge bg-secondary">Learners:</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['ha_noa_learners']; ?>" readonly />

                        </div>

                        <div class="col ">

                        <h5 class="mb-2"><span class="badge bg-secondary">Teachers:</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['ha_noa_teachers']; ?>" readonly />

                        </div>

                        <div class="col pe-5">
                        <h5 class="mb-2"><span class="badge bg-secondary">NTP:</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['ha_noa_ntp']; ?>" readonly />

                        </div>
                      </div>


                      <div class="row ps-4 mt-2">
                         <h5>2. No. with Health Problems</h5>
                      </div>

                      <div class="row align-items-center py-2 mb-3">
                        <div class="col ps-5">

                          <h5 class="mb-2"><span class="badge bg-secondary">Learners:</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['ha_nhp_learners']; ?>" readonly />

                        </div>

                        <div class="col ">

                        <h5 class="mb-2"><span class="badge bg-secondary">Teachers:</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['ha_nhp_teachers']; ?>" readonly />

                        </div>

                        <div class="col pe-5">
                        <h5 class="mb-2"><span class="badge bg-secondary">NTP:</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['ha_nhp_ntp']; ?>" readonly />

                        </div>
                      </div>

                      <div class="row ps-4 mt-2">
                         <h5>3. No. of Vision Screening (Learners)</h5>
                      </div>

                      <div class="row align-items-center py-2 mb-5">

                        <div class="col ps-5">
                        
                          <input style="width:30.5%" type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['ha_vs_learners']; ?>" readonly />

                        </div>
                      </div>


                      
                    <div class="row ps-4">
                      <h5><strong> B. Treatment Done </strong></h5>
                    </div>

                      <div class="row align-items-center py-2 mb-3">
                        <div class="col ps-5">

                          <h5 class="mb-2"><span class="badge bg-secondary">Learners:</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['td_learners']; ?>" readonly />

                        </div>

                        <div class="col ">

                        <h5 class="mb-2"><span class="badge bg-secondary">Teachers:</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['td_teachers']; ?>" readonly />

                        </div>

                        <div class="col pe-5">
                        <h5 class="mb-2"><span class="badge bg-secondary">NTP:</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['td_ntp']; ?>" readonly />

                        </div>
                      </div>


                      <div class="row ps-4 mt-2">
                         <h5><strong>C. No. of Pupils Dewormed</strong></h5>
                      </div>

                      <div class="row align-items-center py-2 mb-3">
                        <div class="col ps-5">

                          <h5 class="mb-2"><span class="badge bg-secondary">1st Round:</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['npd_r1']; ?>" readonly />

                        </div>

                        <div class="col ">

                        <h5 class="mb-2"><span class="badge bg-secondary">2nd Round:</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['npd_r2']; ?>" readonly />

                        </div>

                        <div class="col pe-5">
                        </div>
                      </div>

                      <div class="row ps-4 mt-2">
                         <h5><strong>D. No. of Pupils Given Iron Supplement</strong></h5>
                      </div>

                      <div class="row align-items-center py-2 mb-3">

                        <div class="col ps-5 mb-3">
                        
                          <input style="width:30.5%" type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['npgis']; ?>" readonly />

                        </div>
                      </div>



                      <div class="row ps-4">
                      <h5><strong> E. No. of Pupils Immunized (Specify vaccine given)</strong></h5>
                    </div>

                      <div class="row align-items-center py-2 mb-3">
                        <div class="col ps-5">

                          <h5 class="mb-2"><span class="badge bg-secondary">Grade 1 MR/TD Vaccine</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['npi_g1v']; ?>" readonly />

                        </div>

                        <div class="col ">

                        <h5 class="mb-2"><span class="badge bg-secondary">Grade 7 MR/TD Vaccine</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['npi_g7v']; ?>" readonly />

                        </div>

                        <div class="col pe-5">
                        <h5 class="mb-2"><span class="badge bg-secondary">Grade 4 HPV (Female)</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['npi_g4v']; ?>" readonly />

                        </div>
                      </div>




                      <div class="row ps-4 mt-2">
                         <h5><strong>F. No. of consultation attended</strong></h5>
                      </div>

                      <div class="row align-items-center py-2 mb-3">
                        <div class="col ps-5">

                          <h5 class="mb-2"><span class="badge bg-secondary">Learners:</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['nca_learners']; ?>" readonly />

                        </div>

                        <div class="col ">

                        <h5 class="mb-2"><span class="badge bg-secondary">Teachers</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['nca_teachers']; ?>" readonly />

                        </div>

                        <div class="col pe-5">
                        </div>
                      </div>



                      <div class="row ps-4">
                      <h5><strong>G. Referral (No. Referred to)</strong></h5>
                    </div>

                      <div class="row align-items-center py-2 mb-5">
                        <div class="col ps-5">
                          <h5 class="mb-2"><span class="badge bg-secondary">Physician</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['referral_physician']; ?>" readonly />

                        </div>

                        <div class="col ">
                        <h5 class="mb-2">
                          <span class="badge bg-secondary">Dentist</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['referral_dentis']; ?>" readonly />

                        </div>

                        <div class="col">
                        <h5 class="mb-2"><span class="badge bg-secondary">Other facilities</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['referral_other']; ?>" readonly />

                        </div>

                        <div class="col pe-5" style="margin-top: -16px;">
                        <h5 class="mb-2"><span class="badge bg-secondary">RHU/ District/<br> Provincial Hospital</span></h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="<?= $row['referral_hospital']; ?>" readonly />

                        </div>
                      </div>