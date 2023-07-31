<table class="table">
  <thead>
    <tr>
      <th scope="col">s.no</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "SELECT * FROM `notes`";
      $result = mysqli_query($conn, $sql);
