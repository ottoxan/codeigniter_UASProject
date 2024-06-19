          <div class="bottom">
            <div class="box">
                <p>New Course</p>
                <form action="<?php echo base_url().'pageController/update' ?>" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="id_student" value="<?php echo $student->id_student; ?>" id="">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="name">Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nama_student" value="<?php echo $student->nama_student; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="course">Course</label>
                        <div class="col-sm-6">
                                <select class="form-select" name="course_student" >
                                <option selected><?php echo $student->course_student; ?></option>
                                <option value="Active">HTML</option>
                                <option value="JAVA Script">JAVA Script</option>
                                <option value="CSS">CSS</option>
                                <option value="FLUTTER">FLUTTER</option>
                                <option value="JAVA">JAVA</option>
                                </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="">Alamat</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="alamat_student" value="<?php echo $student->alamat_student; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="">Picutre</label>
                        <div class="col-sm-6">
                            <input type="file" name="berkas"><br><br>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary" name="submit" value="Update">Submit</button>
                        </div>
                        <div class="col-sm-2">
                            <a href="<?php echo base_url('userpage') ?>" class="btn btn-outline-primary" role="button">Cancel</a>
                        </div>
                    </div>
                    
                </form>
            </div>
          </div>
       </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>