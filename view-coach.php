<h1>Coaches</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
       <th>ID</th>
      <th>Name</th>
      <th>Age</th> 
      </tr>
    </thead>
      <tbody>
        <?php
        while($coachs = $coach->fetch_assoc())   {
        ?>
        <tr>
          <td><?php echo $coachs['coach_id']; ?> </td>
          <td><?php echo $coachs['coach_name']; ?> </td>
          <td> <?php echo $coachs['coach_age']; ?></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
  </table>
</div>
