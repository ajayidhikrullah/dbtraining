<?php
    include "header.php";
    include('admin/classes/admin.classes.php');
    $fetchContact = new Admin();
    $contacts = $fetchContact->getUsers();
?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Admin Dashboard</li>
        </ol>
        <h2>Contact us information from users...</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>
          Admin Dashboard
        </p>



        <table class="table">
        <caption>Contact Us Information...</caption>
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Full name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            </tr>
        </thead>
        <tbody>

            <?php
            // var_dump($contacts);exit;
            foreach($contacts as $eachRow){?>
                <?php echo "<tr>
                    <th scope='row'>" . $eachRow['id'] . "</th>
                    <td>" . $eachRow['fullName'] . "</td>
                    <td>" . $eachRow['email'] . "</td>
                    <td>" . $eachRow['subject'] . "</td>
                    <td>" . $eachRow['message'] . "</td>
                </tr>";
                ?>

              <?php
            } ?>

                
                                  
        
        
        </tbody>
</table>
      </div>
    </section>

  </main><!-- End #main -->

<!-- Pagination here, based on number of rows sha -->
  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

<?php
  include "footer.php";
?>