          <div class="bottom">
            <div class="box">
                <p>New Student</p>
                <?php echo $error ?>
                <form action="<?php echo base_url('tambah') ?>" enctype="multipart/form-data" method="POST">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="">Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nama_student" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="">Course</label>
                        <div class="col-sm-6">
                            <select class="form-select" name="course_student" >
                                <option selected value="HTML">HTML</option>
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
                            <input type="text" class="form-control" name="alamat_student" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="">Picutre</label>
                        <div class="col-sm-6">
                            <input type="file" name="berkas"><br><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <button type="submit" value="uploud" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?php base_url('') ?>userpage" class="btn btn-outline-primary" role="button">Cancel</a>
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