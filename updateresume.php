
<?php
$title ="Create Resume | ResumeCraft";
require './assets/includes/header.php';
require './assets/includes/navbar.php';
$fn->authpage();
?>  


    <div class="container">

        <div class="bg-white rounded shadow p-2 mt-4" style="min-height:80vh">
            <div class="d-flex justify-content-between border-bottom">
                <h5>Create Resume</h5>
                <div>
                <a class="text-decoration-none" onclick='history.back()'></history><i class="bi bi-arrow-left-circle"></i> Back</a>
                </div>
            </div>

            <div>

                <form action="actions/createresume.action.php" method="post" class="row g-3 p-3">
                    <h5 class="mt-3 text-secondary"><i class="bi bi-person-badge"></i> Personal Information</h5>
                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="full_name" placeholder="Sagar Bhusal" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email_id" placeholder="Sagar@abc.com" class="form-control" required>
                    </div>
                    
                    <div class="col-12" label for="inputAddrss" class="form-label"> Objective</label>
                        <textarea class="form-control" name="objective"></textarea>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Mobile No</label>
                        <input type="number" min="1111111111" name="mobile_no"  max="9999999999"
                            class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Transgender</option>




                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Religion</label>
                        <select class="form-select" name="religion">    
                            <option>Hindu</option>
                            <option>Muslim</option>
                            <option>Christian</option>



                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nationality</label>
                        <select class="form-select" name="nationality">
                            <option>Nepali</option>
                            <option>Non Nepali/option>


                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Marital Status</label>
                        <select class="form-select" name="marital_status">
                            <option>Married</option>
                            <option>Single</option>
                            <option>Divorced</option>
                           

                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Hobbies</label>
                        <input type="text" name="hobbies" placeholder="Reading Books, Watching Movies" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Languages</label>
                        <input type="text" placeholder="Nepali,English" name="languages" class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label"> Address</label>
                        <input type="text" class="form-control"name="address" id="inputAddress" placeholder="Kritpur,Kathmandu" required>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h5 class=" text-secondary"><i class="bi bi-briefcase"></i> Experience</h5>
                        <div>
                            <a  class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#addexp"><i class="bi bi-file-earmark-plus"></i> Add New</a>
                        </div>
                    </div>


  

                    <div class="d-flex flex-wrap">



                        <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>BSc. CSIT</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="" >
                                    <i class="bi bi-buildings"></i> DDL
                                </p>
                                <p class="small text-secondary m-0" style="">
                                    Handling social media
                                </p>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>BSc. CSIT</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="">
                                    <i class="bi bi-buildings"></i> DDL
                                </p>
                                <p class="small text-secondary m-0" style="">
                                    Handling social media
                                </p>

                            </div>
                        </div>

                    </div>

                    <hr>
                    <div class="d-flex justify-content-between">
                        <h5 class=" text-secondary"><i class="bi bi-journal-bookmark"></i> Education</h5>
                        <div>
                            <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#addedu"><i class="bi bi-file-earmark-plus"></i> Add New</a>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap">



                        <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>Completed 12th Class (Science Stream)</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="">
                                    <i class="bi bi-book"></i> Goldengate International College
                                </p>
                                <p class="small text-secondary m-0" style="">
                                    Passed / Completed In 2020
                                </p>

                            </div>
                        </div>

                        <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>Completed 12th Class (Science Stream)</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="">
                                    <i class="bi bi-book"></i> Goldengate International College
                                </p>
                                <p class="small text-secondary m-0" style="">
                                    Passed / Completed In 2020
                                </p>

                            </div>
                        </div>


                    </div>

                    <hr>
                    <div class="d-flex justify-content-between">
                        <h5 class=" text-secondary"><i class="bi bi-boxes"></i> Skills</h5>
                        <div>
                            <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#addskill"><i class="bi bi-file-earmark-plus"></i> Add New</a>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap">



                        <div class="col-12 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6><i class="bi bi-caret-right"></i> Basic Knowledge in Computer & Internet</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6><i class="bi bi-caret-right"></i> Basic Knowledge in Computer & Internet</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>
                            </div>
                        </div>




                    </div>



                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Save
                            Resume</button>
                    </div>
                </form>
            </div>





        </div>

    </div>

<!-- //modal exp-->

<div class="modal fade" id="addexp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Experience</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post" action="actions/addexperience.action.php" class="row g-3">
  <div class="col-12">
    <label for="inputEmail4" class="form-label">Position / Job Role</label>
    <input type="text" class="form-control" name="position" id="inputEmail4" required>
  </div>
  <div class="col-12">
    <label for="inputPassword4" class="form-label">Company</label>
    <input type="text" name="company" class="form-control" id="inputPassword4" required>
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Joined</label>
    <input type="text" name="started" class="form-control" id="inputPassword4" required>
  </div>
  
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Resigned</label>
    <input type="text" name="ended" class="form-control" id="inputPassword4" required>
  </div>

  <div class="col-12">
  <label for="inputPassword4" class="form-label">Job Description</label>
   <textarea class="form-control" name="job_desc" required></textarea>
  </div>
  
  <div class="col-12 text-end">
    <button type="submit" class="btn btn-primary">Add Experience</button>
  </div>

</form>

      </div>
     
    </div>
  </div>
  </div>
<!-- //modal exp-->


<!-- //modal edu-->
 
<div class="modal fade" id="addedu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Education</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post" action="actions/addeducation.action.php" class="row g-3">
  <div class="col-12">
    <label for="inputEmail4" class="form-label">Course/ Degree</label>
    <input type="text" class="form-control" name="course" id="inputEmail4" required>
  </div>
  <div class="col-12">
    <label for="inputPassword4" class="form-label">Institute / Board</label>
    <input type="text" name="institute" class="form-control" id="inputPassword4" required>
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Started</label>
    <input type="text" name="started" class="form-control" id="inputPassword4" required>
  </div>
  
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Ended</label>
    <input type="text" name="ended" class="form-control" id="inputPassword4" required>
  </div>

 
  <div class="col-12 text-end">
    <button type="submit" class="btn btn-primary">Add Education</button>
  </div>

</form>

      </div>
     
    </div>
  </div>
  </div>

<!-- //modal edu-->


<!-- //modal skill-->
 
<div class="modal fade" id="addskill" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Skill</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post" action="actions/addskill.action.php" class="row g-3">
  <div class="col-12">
    <label for="inputEmail4" class="form-label">Skill</label>
    <input type="text" class="form-control" name="skill" id="inputEmail4" required>
  </div>

  <div class="col-12 text-end">
    <button type="submit" class="btn btn-primary">Add Skill</button>
  </div>

</form>

      </div>
     
    </div>
  </div>
  </div>

<!-- //modal skill-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>