          <div class="bottom">
            <div class="box">
                <p>Students</p> 
                <a class="btn btn-primary" href="<?php echo base_url('create') ?>" role="button">New Students</a>
                <br>

                <table class="table">
                        <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>alamat</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    <?php $no = $this->uri->segment('3') + 1;
                      foreach ($student as $u){ ?>
                      <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $u->nama_student ?></td>
                            <td><?php echo $u->course_student ?></td>
                            <td><?php echo $u->alamat_student ?></td>
                        <td>
                          <a class='btn btn-primary btn-sm' href='<?php echo base_url(). 'pageController/edit/'.$u->id_student ?>'>ُEdit</a>
                          <a class='btn btn-danger btn-sm' href='<?php echo base_url(). 'pageController/hapus/'.$u->id_student ?>'>Delete</a>
                          <a class='btn btn-danger btn-sm' href='<?php echo base_url(). 'pageController/download/'.$u->id_student ?>'>Download picture</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                </table>
              <center>
               <b><?php echo $this->pagination->create_links(); ?></b>
             </center>
            </div>
          </div>
       </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>